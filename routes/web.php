<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\FooterContentController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackagesDetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherByBatchController;
use App\Http\Controllers\LiveSessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\TeacherCalanderController;
use App\Http\Controllers\TeacherProfileController;
use App\Http\Controllers\ZoomController;
use App\Models\Batch;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeWorkController;
use App\Http\Controllers\HomeWorkStudentController;
use App\Http\Controllers\OperationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $batches = Batch::whereHas('batchSession', function ($query) {
        $query->whereDate('start_date_time', '>=', Carbon::today());
    })->latest()->take(8)->get();
    return view('welcome', compact('batches'));
});
// Route::get('/', function () {
//     $batches = Batch::latest()->take(8)->get();

//     return view('welcome', compact('batches'));
// });

Auth::routes();

Route::get('/admin-login', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/teacher-login', 'App\Http\Controllers\Auth\LoginController@teacherLogin');
Route::get('/operation-login', 'App\Http\Controllers\Auth\LoginController@operationLogin');

Route::get('/student-register', 'App\Http\Controllers\Auth\LoginController@studentRegister')->name('student-register');
Route::post('/student-register', 'App\Http\Controllers\Auth\RegisterController@register')->name('student-register');
Route::get('/student-login', 'App\Http\Controllers\Auth\LoginController@studentLogin')->name('student-login');
Route::post('/student-login', 'App\Http\Controllers\Auth\LoginController@login')->name('student-login');
Route::get('/student-details/{id}', [BatchController::class, 'studentDetails'])->name('student-details');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);

    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::post('profile/save', [ProfileController::class, 'store'])->name('image-upload');



    Route::get('/admin-dashboard', [HomeController::class, 'adminDashboard']);
    Route::get('/admin-show', [HomeController::class, 'adminshow']);

    Route::get('/teacher-new-dashboard', [HomeController::class, 'teacherDashboard']);
    Route::get('/operation-dashboard', [HomeController::class, 'operationDashboard']);

    Route::get('/student-dashboard', [HomeController::class, 'studentDashboard'])->name('student-dashboard');
    // Route::get('/student-dashboard', [HomeController::class, 'newStudentDashboard'])->name('student-dashboard');
    Route::get('/session-list', [HomeController::class, 'sessionList']);
    Route::get('zoom/{id}', [HomeController::class, 'zoom']);

    // Teacher Controller
    Route::get('add-teacher', [TeacherController::class, 'create'])->name('add-teacher');
    Route::post('add-teacher', [TeacherController::class, 'store'])->name('add-teacher');
    Route::get('manage-teacher', [TeacherController::class, 'index'])->name('manage-teacher');
    Route::get('edit-teacher/{id}', [TeacherController::class, 'edit'])->name('edit-teacher');
    Route::post('edit-teacher/{id}', [TeacherController::class, 'update'])->name('edit-teacher');
    Route::get('show-teacher/{id}', [TeacherController::class, 'show'])->name('show-teacher');
    Route::get('destroy-teacher/{id}', [TeacherController::class, 'destroy'])->name('destroy-teacher');




    // Route::get('/packages-details', [BatchController::class, 'packagesDetails'])->name('packages.details');


    Route::get('add-product', [TeacherController::class, 'store'])->name('add-product');
    Route::post('add-product', [TeacherController::class, 'store'])->name('add-product');
});

// Route::get('add-to-cart/{batchId}', [PaymentController::class, 'payment'])->name('cart.add');

Route::get('add-to-cart/{batchId}', [PaymentController::class, 'payment'])->name('cart.add');
Route::get('remove-from-cart/{removeFromCart}', [PaymentController::class, 'removeFromCart'])->name('cart.remove');
// Route::post('add-to-cart/{batchId}', [PaymentController::class, 'payment'])->name('cart.add');
Route::get('terms-of-use', [FooterContentController::class, 'termsofuse'])->name('terms.of.use');
Route::get('privacy-policy', [FooterContentController::class, 'privacyPolicy'])->name('privacy.policy');

Route::post('/pay', [PaymentController::class, 'pay'])->name('payment.makePayment');
//needs to be removed. testing purpuse only
// Route::get('/pay', [PaymentController::class, 'pay'])->name('payment.makePayment');

Route::post('/login-api', [ApiController::class, 'login']);
Route::post('/signup', [RegisterController::class, 'create']);
// packages details
Route::get('/packages-details', [PackagesDetailsController::class, 'packagesDetails'])->name('packages.details');
//teacher dashboard
Route::get('/teacher-dashboard', [TeacherDashboardController::class, 'index'])->name('teacher-dashboard')->middleware('auth');
Route::get('/teacher-profile', [TeacherProfileController::class, 'index'])->name('teacher-profile')->middleware('auth');
Route::get('teacher-experience-edit', [TeacherProfileController::class, 'edit'])->middleware('auth');
Route::post('teacher-image', [TeacherProfileController::class, 'storeImage'])->name('teacher-image')->middleware('auth');
Route::post('teacher-info', [TeacherProfileController::class, 'storeInformation'])->name('teacher-info')->middleware('auth');
Route::post('teacher-idproof', [TeacherProfileController::class, 'storeIdproof'])->name('teacher-idproof')->middleware('auth');
Route::post('teacher-experience', [TeacherProfileController::class, 'storeExperience'])->name('teacher-experience')->middleware('auth');
Route::post('get-subject', [TeacherProfileController::class, 'getSubject'])->name('get-subject')->middleware('auth');
Route::post('teacher-expertise', [TeacherProfileController::class, 'storeExpertise'])->name('teacher-expertise')->middleware('auth');
Route::post('teacher-expertise-data', [TeacherProfileController::class, 'storeExpertiseData'])->name('teacher-expertise-data')->middleware('auth');

/*Student Homework Module*/
Route::get('home-work/{id}', [HomeWorkStudentController::class, 'index'])->name('home-work')->middleware('auth');
Route::get('submit-home-work/{id}', [HomeWorkStudentController::class, 'submitHomework'])->name('submit-home-work')->middleware('auth');
Route::post('upload-homework', [HomeWorkStudentController::class, 'uploadHomework'])->name('upload-homework')->middleware('auth');
Route::post('upload-homework-text', [HomeWorkStudentController::class, 'uploadText'])->name('upload-homework-text')->middleware('auth');
/*End home work module*/


// for zoom
// Route::get('/', [ZoomController::class, 'zoom'])->name('zoom');
Route::get('/teacher-new-dashboard', [TeacherDashboardController::class, 'index'])->name('teacher-new-dashboard')->middleware('auth');


//live session
Route::get('/live-session-detail', [LiveSessionController::class, 'livesessiondetail'])->name('live-session-detail');
Route::get('/live-session', [LiveSessionController::class, 'livesession'])->name('live-session');

// Teacher Calander routes.
Route::get('teacher-calander/{id}', [TeacherCalanderController::class, 'index'])->name('teacher-calander');
Route::post('teacher-calander/{id}', [TeacherCalanderController::class, 'sessions']);
Route::get('fullcalender', [FullCalenderController::class, 'index'])->name('fullcalender');
Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);


Route::get('start-session/{id}', [HomeWorkController::class, 'startSession']);
Route::post('start-session/{id}', [HomeWorkController::class, 'saveStartSession']);
Route::get('view-homework-details/{id}', [HomeWorkController::class, 'viewhomeworkdetails']);

Route::post("/assign-points", [HomeWorkController::class, 'assignPoints']);
Route::post('/upload-pdf/{id}', [HomeWorkController::class, 'uploadPDF']);
//test route


Route::post('/assign-homework', [HomeWorkController::class, 'assignHomeWork'])->name('assign-homework');

Route::group(['middleware' => ['auth', 'teacher']], function() {
        Route::get('new-teacher', [TeacherDashboardController::class, 'newindex']);
        // batch/class controller
    Route::get('create-classes', [BatchController::class, 'create'])->name('class.create');
    Route::post('create-classes', [BatchController::class, 'store'])->name('class.store');
    Route::get('manage-classes', [BatchController::class, 'index'])->name('manage-class');
    Route::get('edit-classes/{id}', [BatchController::class, 'edit'])->name('edit-class');
    Route::post('edit-classes/{id}', [BatchController::class, 'update'])->name('update-class');
    Route::get('show-classes/{id}', [BatchController::class, 'show'])->name('show-class');
    Route::get('destroy-classes/{id}', [BatchController::class, 'destroy'])->name('destroy-class');
    Route::get('student', [BatchController::class, 'student'])->name('student');
    Route::get('available-courses', [BatchController::class, 'availableCourses'])->name('available-courses');
    });
Route::group(['middleware' => ['auth', 'student']], function() {
    Route::get('buy-now', [BatchController::class, 'buyNow'])->name('buy.now');
    Route::post('buy-now', [BatchController::class, 'buyNow'])->name('buy.now');

    });
    Route::group(['middleware' => ['auth', 'operation']], function() {

        Route::get('get-operation', [OperationController::class, 'index']);
        });
