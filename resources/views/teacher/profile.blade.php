@extends('layouts.teacher_dashboard')
@section('content')
<link rel="stylesheet" href="{{asset('wa/teacherdashboard/css/teacherProfile.css')}}">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
                    </div>
                    <div class="container-fluid mt-5">
                        <a class="direction_nav" href="#">
                            <span class="arrow-right">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </span>
                            <span>Edit Profile</span>
                        </a>
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-1" type="button" class="btn btn-success btn-circle active">1</a>
                                    <p class=" tab_font_title active">PERSONAL INFORMATION</p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle"
                                        disabled="disabled">2</a>
                                    <p class="tab_font_title">Experience</p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-3" id="button3" type="button" class="btn btn-default btn-circle"
                                        disabled="disabled">3</a>
                                    <p class="tab_font_title">Subjects</p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-4" type="button" class="btn btn-default btn-circle"
                                        disabled="disabled">4</a>
                                    <p class="tab_font_title">Teaching Expertise</p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-5" type="button" class="btn btn-default btn-circle"
                                        disabled="disabled">5</a>
                                    <p class="tab_font_title">Availability</p>
                                </div>
                                <div class="stepwizard-step col-xs-3">
                                    <a href="#step-6" type="button" class="btn btn-default btn-circle"
                                        disabled="disabled">6</a>
                                    <p class="tab_font_title">Pricing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="panel panel-primary setup-content" id="step-1">
                                        <div class="panel-heading">
                                            <h3 class="panel-title personal">
                                                <span><img src="{{asset('wa/teacherdashboard/img/pf-icon.svg')}}" width="50" height="50"></span>PERSONAL
                                                INFORMATION
                                            </h3>
                                        </div>
                                        <div class="upload_border border-dotted">
                                            <form enctype="multipart/form-data" id="profile_photo_form">
                                                @csrf
                                                <label>
                                                    <img src="{{asset('wa/teacherdashboard/img/Frame 69623.svg')}}" width="65" height="65" id="preview-image-before-upload">
                                                    <input type="file" name="profile_photo_input" id="profile_upload" style="cursor: pointer;">
                                                </label>
                                                <div>
                                                    <button class="upload_btn" type="submit"><img src="{{asset('wa/teacherdashboard/img/upload 1.svg')}}" width="20"
                                                            height="20">Upload</button>
                                                </div>
                                                <span class="text-danger" id="image-input-error"></span>
                                                <span class="text-primary" id="image-input-success"></span>
                                                {{-- <p>Upload Image</p> --}}
                                                <div style="display: none;" id="profile_pic_loader">
                                                <img src="{{asset('wa/assets/img/ajax-loader.gif')}}" alt="">
                                                <p><b>Please wait...</b></p>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                        <form role="form" id="profile_details">
                                                @csrf
                                            <div class="form-group session_info">
                                                <label for="text">Name</label>
                                                <input type="text" class="form-control" name="teacher_name" id="teacher_name"
                                                    aria-describedby="emailHelp" placeholder="Enter Name" value="{{auth()->user()->name}}">
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group session_info">
                                                    <label for="text">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        aria-describedby="emailHelp" placeholder="Enter Phone Number" name="teacher_phone" value="{{auth()->user()->contact_number}}"/>
                                                        <span><p>The phone numbers should be of 10 digits</p></span>
                                                </div>
                                            </div>
                                            <div class="form-group session_info">
                                                <label for="text">Email ID</label>
                                                <input type="text" class="form-control" id="email_id"
                                                    aria-describedby="emailHelp" placeholder="Enter Email Id" name="teacher_email" value="{{auth()->user()->email}}" disabled/>
                                            </div>
                                            @foreach ($images as $image)
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group session_info">
                                                        <label for="text">Gender</label>
                                                        <!-- <input type="text" class="form-control" id="session-data" aria-describedby="emailHelp" placeholder="Select your Gender"> -->
                                                        <select class="form-control" name="gender">
                                                            <optgroup label="gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                {{-- <option value="saab">Female</option> --}}
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group session_info">
                                                <label for="textarea">About</label>
                                                <textarea rows="5" class="form-control" id="about"
                                                            placeholder="Write something about yourself" name="about" value="{{$image->about}}"></textarea>
                                            </div>
                                            <div class="form-group session_info">
                                                <label for="text">Address</label>
                                                <input type="text" class="form-control" id="address"
                                                    aria-describedby="emailHelp" placeholder="Address" name="address" value="{{$image->address}}"/>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text">City</label>
                                                        <input type="text" class="form-control" id="teacher_city"
                                                            aria-describedby="emailHelp" placeholder="Enter City" name="city" value="{{$image->city}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text">Zip Code</label>
                                                        <input type="text" class="form-control" id="teacher_city"
                                                            placeholder="Enter Location" name="zipcode" value="{{$image->zip_code}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text">Country</label>
                                                        <input type="text" class="form-control" id="teacher_country"
                                                            aria-describedby="emailHelp" placeholder="Select Country" name="country" value="{{$image->country}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text">Time Zone</label>
                                                        <input type="text" class="form-control" id="teacher_timezone"
                                                            placeholder="Enter your time zone" name="timezone" value="{{$image->time_zone}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group session_info">
                                                    {{-- <button type="submit" class="form-control">Submit</button> --}}
                                                    <button class="btn verifyBtn pull-left" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            @endforeach
                                        </form>
                                        <span class="text-primary" id="profile-information-sucess"></span>
                                        <span class="text-danger" id="profile-information-error"></span>
                                        <div style="display: none;" id="profile_info_loader">
                                            <img src="{{asset('wa/assets/img/ajax-loader.gif')}}" alt=""/>
                                            <p><b>Please wait...</b></p>
                                        </div>
                                        <div class="id_proof border-dotted">
                                                <p>ID Proof</p>
                                                <form role="form" enctype="multipart/form-data" id="profile_idphoto">
                                                    @csrf
                                                    <img src="{{asset('wa/teacherdashboard/img/Frame 69623.svg')}}" width="65" height="65" id="before-id"/>
                                                    <input type="file" name="id_photo" id="id_upload" style="cursor: pointer;"/>
                                                    <p>Upload Image</p>
                                                    <div>
                                                        <button class="upload_btn"><img src="{{asset('wa/teacherdashboard/img/upload 1.svg')}}" width="20"
                                                                height="20">Upload</button>
                                                    </div>
                                                </form>
                                                <span class="text-primary" id="id-input-success"></span>
                                                <span class="text-danger" id="id-input-error"></span>
                                                <div style="display: none;" id="profile_id_loader">
                                                <img src="{{asset('wa/assets/img/ajax-loader.gif')}}" alt="">
                                                <p><b>Please wait...</b></p>
                                                </div>
                                                <p>The format of image should be JPG, PNG or PDF and size should not exeed 300KB</p>
                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="panel panel-primary setup-content" id="step-2">
                            <div class="panel-heading">
                                <!-- <h3 class="panel-title">Destination</h3> -->
                                <h3 class="panel-title personal">
                                <span
                                    ><img
                                    src="{{asset('wa/teacherdashboard/img/experience.svg')}}"
                                    width="50"
                                    height="50"/></span
                                >EXPERIENCE
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" id="sailorTableArea">
                                <table
                                    id="sailorTable"
                                    class="table table-striped table-bordered"
                                    width="100%"
                                >
                                    <thead>
                                    <tr>
                                        <th>Experience Type</th>
                                        <th>Title</th>
                                        <th>Institution/Organisation</th>
                                        <th>Location</th>
                                        <th>Start-End Year</th>
                                        <th>Certification</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($teacher_experiences as $teacher_experience)
                                        <tr>
                                        <td>{{$teacher_experience->experience_type}}</td>
                                        <td>{{$teacher_experience->experience_title}}</td>
                                        <td>{{$teacher_experience->experience_org}}</td>
                                        <td>{{$teacher_experience->experience_location}}</td>
                                        <td>{{$teacher_experience->experience_startendyear}}</td>
                                        <td>{{$teacher_experience->experience_certification}}</td>
                                        <td>
                                        <div class="d-flex">
                                        <div><img src="{{asset('wa/teacherdashboard/img/delete.svg')}}" width="20" height="20" class="mr-3" data-toggle="modal" data-target="#exampleModal" onmouseover="this.style.cursor='pointer'"></div>

                                            <div >
                                                <img src="{{asset('wa/teacherdashboard/img/edit.svg')}}" width="20" height="20" class="mr-3 editbutton" data-toggle="modal" data-target="#exampleModal1" onmouseover="this.style.cursor='pointer'" id="{{$teacher_experience->id}}">
                                            </div>

                                        </div>
                                        </td>
                                    </tr>
                                        @empty
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                                </div>
                                <div class="row">
                                <button type="button" class="btn add_more_cta mt-4" data-toggle="modal" data-target="#exampleModal">Add More +</button>
                                </div>
                                <div class="row d-flex mt-3">
                                <a href="#" class="prev_cta_txt"><p class="mt-3">Prev</p></a>
                                <a href="#step-4" class="next_cta_pre "><p class="mt-3">Next</p></a>
                                </div>
                            </div>
                        </div>
                        <!-- modal pup-up start -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog form_data_modal" role="document">
                                <div class="modal-content">
                                    <form role="form" id="experienceform">
                                        @csrf
                                            <div class="modal-header" >
                                                <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <div class="form-group session_info">
                                                                <label for="text" class="form_data_lable">Experience Type</label>
                                                                <input type="text" name="experience_type" class="form-control form_data_input" id="enter-experience" aria-describedby="enterExperience" placeholder="Enter Experience" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Title</label>
                                                            <input type="text" name="experience_title" class="form-control form_data_input" id="enter-title" aria-describedby="emailHelp" placeholder="Enter Title">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Institution/Organisation</label>
                                                            <input type="text" name="experience_org" class="form-control form_data_input" id="organisation-data" aria-describedby="emailHelp" placeholder="Organisation">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Location</label>
                                                            <input type="text" name="experience_location" class="form-control form_data_input" id="location" aria-describedby="emailHelp" placeholder="Enter Location">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div>
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Start-End Year</label>
                                                            <input type="text" name="experience_startendyear" class="form-control form_data_input" id="teacher_start" aria-describedby="emailHelp" placeholder="Enter Year">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Certification</label>
                                                            <input type="text" name="experience_certification" class="form-control form_data_input" id="teacher_certification" aria-describedby="emailHelp" placeholder="Enter Certification">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <span class="text-primary" id="experience-success"></span>
                                                <span class="text-danger" id="experience-error"></span>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal pop up end -->
                        <!--modal for crate -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                            <div class="modal-dialog form_data_modal" role="document">
                                <div class="modal-content">
                                    <form role="form" id="experienceform1">
                                        @csrf
                                        <div id="modalforedit">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end modal for crate -->
                        <!--step 3 starts here about teacher subjects -->
                        <div class="panel panel-primary setup-content" id="step-3">
                            <div class="panel-heading">
                                <h3 class="panel-title personal">
                                <span class="pr-3">
                                    <img src="{{asset('wa/teacherdashboard/img/subject.svg')}}" width="50" height="50"/>
                                </span>
                                    Subjects
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <p>
                                            <strong>Select Student Group</strong>
                                        </p>
                                        <div class="row">
                                            <div class="col-md-3 col-lg-3">
                                                <input type="radio" id="agegroup1" name="agegroup" value="08 - 09 Years"/>
                                                <label for="agegroup1" class="card-body border student_group_card">08 - 09 Years</label>
                                            </div>
                                            <div class="col-md-3 col-lg-3">
                                                <input type="radio" id="agegroup2" name="agegroup" value="10 - 11 Years"/>
                                                <label for="agegroup2" class="card-body border student_group_card">10 - 11 Years</label>
                                            </div>
                                            <div class="col-md-3 col-lg-3">
                                               <input type="radio" id="agegroup3" name="agegroup" value="12 - 14 Years"/>
                                                <label for="agegroup3" class="card-body border student_group_card">12 - 14 Years</label>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="vertical-tabs">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    @foreach ($classes as $class)
                                                    <li class="nav-item">
                                                    <a
                                                    @if ($class->id==1)
                                                        class="nav-link active clicklink"
                                                    @else
                                                        class="nav-link clicklink"
                                                    @endif
                                                        data-toggle="tab"
                                                        href="#pag{{$class->id}}"
                                                        role="tab"
                                                        aria-controls="home"
                                                        id="{{$class->id}}"
                                                        value="{{$class->id}}"
                                                        >{{$class->name}}
                                                        </a>
                                                        <input type="hidden" id="{{$class->id}}" class="classId" value="{{$class->id}}">
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="pag{{$class->id}}" role="tabpanel">
                                                        <div class="sv-tab-panel">
                                                            <div class="tab1_section_checkbox">
                                                                <form id="subjectslist">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="#" class="prev_tab">
                                        <span>Prev</span>
                                    </a>
                                    <button class="btn btn-primary nextBtn_cta pull-right" type="submit" id="submitButton">
                                        Next
                                    </button>
                                    <span id="data-success"></span>
                                    <span id="data-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary setup-content" id="step-4">
                            <div class="panel-heading">
                                <h3 class="panel-title personal">
                                    <span class="pr-3">
                                        <img src="{{asset('wa/teacherdashboard/img/Expertise.svg')}}" width="50" height="50"/>
                                    </span>
                                    Teaching Expertise
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="upload_border border-dotted">
                                            @forelse ($expertiseData as $data)
                                                <textarea rows="3" cols="30" class="form-control" id="video_code" placeholder="Paste your Embed code here" name="about" value="{{$data->video_src}}">
                                                    {{$data->video_src}}
                                                </textarea>
                                                @empty
                                                <textarea rows="3" cols="30" class="form-control" id="video_code" placeholder="Paste your Embed code here" name="about">
                                                </textarea>
                                            @endforelse
                                        </div>
                                        <div class="vedio_img">
                                             @foreach ($expertiseData as $data)

                                            <iframe class="video_img pt-4" width="600" height="250" src="{{$data->video_src}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            @endforeach
                                        </div>
                                        <div class="edit_delete_section text-center mt-3 mb-3">
                                            <div class="vedio_delite"><img src="{{asset('wa/teacherdashboard/img/vedio-delite.svg')}}" ></div>
                                            <div class="vedio_edit"><img src="{{asset('wa/teacherdashboard/img/vedio-edit.svg')}}" ></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group session_info">
                                                    <label for="text">
                                                        <strong>Language Proficiency</strong>
                                                    </label>
                                                    <select class="form-control" id="language_name">
                                                        @foreach ($languages as $language)
                                                            <option value="{{$language->language_name}}">{{$language->language_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group session_info">
                                                    <label for="text">
                                                        <strong>Language Proficiency</strong>
                                                    </label>
                                                    <select class="form-control" id="proficiency">
                                                        <option value="begineer">Begineer</option>
                                                        <option value="proficient">Proficient</option>
                                                        <option value="expert">Expert</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <a href="#step-3" class="prev_tab">
                                    <span>Prev</span>
                                    </a>
                                    <button class="btn btn-primary nextBtn_cta pull-right" type="button" id="submitvideo">
                                        Next
                                    </button>
                                    <div style="display: none;" id="video_loader">
                                        <img src="{{asset('wa/assets/img/ajax-loader.gif')}}" alt="">
                                        <p><b>Please wait...</b></p>
                                    </div>
                                    <span id="data-expertise-success"></span>
                                    <span id="data-expertise-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary setup-content" id="step-5">
                            <div class="panel-heading">
                                <h3 class="panel-title personal">
                                <span class="pr-3"
                                    ><img
                                    src="{{asset('wa/teacherdashboard/img/Availability.svg')}}"
                                    width="50"
                                    height="50" /></span
                                >Availability
                                </h3>
                            </div>
                            <div class="panel-body">
                                <div class="row mt-5">
                                <!-- Area Chart -->
                                <div class="col-xl-8 col-lg-8">
                                    <div class="row">
                                    <div clas="col-xl-12">
                                        <p class="day">Today</p>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <p class="day_date">
                                        <span class="pr-2">o7</span><span>March</span>
                                        </p>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="year_box">
                                        <select
                                            class="form-control year_text"
                                            id="FormControlSelect1"
                                        >
                                            <option>2021</option>
                                            <option>2020</option>
                                            <option>2019</option>
                                            <option>2018</option>
                                            <option>2017</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="report_status">
                                        <p>Report:</p>
                                        <form class="month_week_block">
                                            <div class="week">
                                            <label class="container-checkbox">
                                                <input
                                                class="week_input"
                                                type="checkbox"
                                                checked="checked"
                                                required=""
                                                />
                                                <span
                                                class="checkmark-box week_checkbox"
                                                ></span>
                                                Week
                                            </label>
                                            </div>
                                            <div class="month">
                                            <label class="container-checkbox">
                                                <input
                                                class="month_input"
                                                type="checkbox"
                                                required=""
                                                />
                                                <span
                                                class="checkmark-box week_checkbox"
                                                ></span>
                                                Month
                                            </label>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="arrow_block">
                                        <p class="left_arrow">
                                            <img src="{{asset('wa/teacherdashboard/img/arrow-left.svg')}}" />
                                        </p>
                                        <p class="right_arrow">
                                            <img src="{{asset('wa/teacherdashboard/img/arrow-right.sv')}}g" />
                                        </p>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                                    >
                                    <div id="datepickerCelander" class="dt_calander">
                                        <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-9">
                                            <div class="day_block">
                                            <p>Sun</p>
                                            <p>Mon</p>
                                            <p>Tue</p>
                                            <p>Wed</p>
                                            <p>Thu</p>
                                            <p>Fri</p>
                                            <p>Sat</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row pr-3 pl-3">
                                        <div class="col-3 minuit">Minutes</div>
                                        <div class="col-9">
                                            <div class="day_block date_p">

                                            <p>11</p>
                                            <p>12</p>
                                            <p>13</p>
                                            <p>14</p>
                                            <p>15</p>
                                            <p>16</p>
                                            <p>17</p>

                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-12">
                                            <div class="table_detail">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td class="background_td"><span class="active_time">Available</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td><span></span></td>
                                                    <td></td>
                                                    <td><span></span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="time_td">10:30 AM</td>
                                                    <td></td>
                                                    <td><span></span></td>
                                                    <td></td>
                                                    <td><span></span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-4">
                                    <div class="mb-4 mt-5">
                                    <!-- Card Header - Dropdown -->
                                    <!-- Card Body -->
                                    <!-- <div class="card-body calander_block">
                                        <p>
                                        <img src="img/calandericon.svg"><span>Availabilitys</span>
                                        </p>
                                        <div id="datepicker" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change"><option value="0">Jan</option><option value="1">Feb</option><option value="2">Mar</option><option value="3">Apr</option><option value="4" selected="selected">May</option><option value="5">Jun</option><option value="6">Jul</option><option value="7">Aug</option><option value="8">Sep</option><option value="9">Oct</option><option value="10">Nov</option><option value="11">Dec</option></select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change"><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021" selected="selected">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option></select></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">1</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">3</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">5</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">6</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">7</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">8</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">12</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="4" data-year="2021"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
                                    </div> -->
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="mb-4">
                                        <a class="other_session_text" href="">
                                            Other Sessions</a
                                        >
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="mb-4 text-right">
                                        <a class="add_task view_text" href="">
                                            View all</a
                                        >
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="mb-4">
                                        <div
                                            class="card-body subject_card_details math_border1 mb-3"
                                        >
                                            <div class="d-flex">
                                            <div>
                                                <p class="subject_title_section">
                                                Feb 04, 2021- Feb 21,20201
                                                </p>
                                            </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                        <div>
                                            <p class="subject_card">Subject</p>
                                            <p class="card_subject_title1">Maths</p>
                                        </div>
                                        <div class="border-left second_left_border"></div>
                                        <div>
                                            <p class="subject_card">Grade</p>
                                            <p class="card_subject_title2">7</p>
                                        </div>
                                        <div class="border-left second_left_border"></div>
                                        <div>
                                            <p class="subject_card">Taught</p>
                                            <p class="card_subject_title3">1 to 1</p>
                                        </div>
                                        <div class="border-left second_left_border"></div>
                                        <div>
                                            <p class="subject_card">Starts in</p>
                                            <p class="card_subject_title4">10:08:55</p>
                                        </div>
                                    </div>
                                        </div>
                                        <div
                                            class="card-body subject_card_details math_border2 mb-3"
                                        >
                                        <div class="d-flex">
                                            <div>
                                                <p class="subject_title_section">
                                                Feb 04, 2021- Feb 21,20201
                                                </p>
                                            </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                            <div>
                                                <p class="subject_card">Subject</p>
                                                <p class="card_subject_title1">Maths</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Grade</p>
                                                <p class="card_subject_title2">7</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Taught</p>
                                                <p class="card_subject_title3">1 to 1</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Starts in</p>
                                                <p class="card_subject_title4">10:08:55</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div
                                            class="card-body subject_card_details math_border3 mb-3"
                                        >
                                        <div class="d-flex">
                                            <div>
                                                <p class="subject_title_section">
                                                Feb 04, 2021- Feb 21,20201
                                                </p>
                                            </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                            <div>
                                                <p class="subject_card">Subject</p>
                                                <p class="card_subject_title1">Maths</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Grade</p>
                                                <p class="card_subject_title2">7</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Taught</p>
                                                <p class="card_subject_title3">1 to 1</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Starts in</p>
                                                <p class="card_subject_title4">10:08:55</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div
                                            class="card-body subject_card_details math_border4"
                                        >
                                        <div class="d-flex">
                                            <div>
                                                <p class="subject_title_section">
                                                Feb 04, 2021- Feb 21,20201
                                                </p>
                                            </div>
                                            </div>
                                            <div class="d-flex justify-content-around">
                                            <div>
                                                <p class="subject_card">Subject</p>
                                                <p class="card_subject_title1">Maths</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Grade</p>
                                                <p class="card_subject_title2">7</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Taught</p>
                                                <p class="card_subject_title3">1 to 1</p>
                                            </div>
                                            <div class="border-left second_left_border"></div>
                                            <div>
                                                <p class="subject_card">Starts in</p>
                                                <p class="card_subject_title4">10:08:55</p>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>


                            </div>
                        </div>
                        <div class="panel panel-primary setup-content" id="step-6">
                            <div class="panel-heading">
                                <!-- <h3 class="panel-title">Cargo khkhkhk</h3> -->
                                <h3 class="panel-title personal">
                                <span class="pr-3"
                                    ><img
                                    src="{{asset('wa/teacherdashboard/img/pricing.svg')}}"
                                    width="50"
                                    height="50" /></span>Pricing
                                </h3>
                            </div>
                            <div class="panel-body">
                                <hr />
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                        <div class="form-group session_info">
                                            <label for="text" class="form_data_lable"
                                            ><strong>Currency</strong></label
                                            >
                                            <select class="form-control" name="teacher_currency">
                                            {{-- <optgroup label="gender"> --}}
                                                <option value="$">$</option>
                                                <option value="pound">Pound</option>
                                            {{-- </optgroup> --}}
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                        <div class="form-group session_info">
                                            <label for="text" class="form_data_lable"
                                            ><strong>Price for 1 Student</strong></label
                                            >
                                            <input
                                            type="text"
                                            required
                                            class="form-control form_data_input"
                                            {{-- id="session-data" --}}
                                            aria-describedby="emailHelp"
                           -                 placeholder="Price for 1 student"
                                            name="price_for_one_student"
                                            />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                        <div class="form-group session_info">
                                            <label for="text" class="form_data_lable"
                                            ><strong>Price for 2 Student</strong></label
                                            >
                                            <input
                                            type="text"
                                            class="form-control form_data_input"
                                            required
                                            {{-- id="session-data" --}}
                                            aria-describedby="emailHelp"
                                            placeholder="Price for 2 student"
                                            name="price_for_two_student"
                                            />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                        <div class="form-group session_info">
                                            <label for="text" class="form_data_lable"
                                            ><strong>Price for a Class</strong></label
                                            >
                                            <input
                                            type="text"
                                            class="form-control form_data_input"
                                            required
                                            {{-- id="session-data" --}}
                                            aria-describedby="emailHelp"
                                            placeholder="Select Price for a Class"
                                            name="price_for_class"
                                            />
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <button
                                    type="button"
                                    class="btn add_more_cta mt-4"
                                    data-toggle="modal"
                                    data-target="#exampleModal"
                                >
                                    Add More +
                                </button>
                                </div>
                                <div class="row d-flex">
                                <a href="#" class="prev_cta_txt"
                                    ><p class="mt-3">Prev</p></a
                                >
                                <a href="#" class="next_cta_pre"
                                    ><p class="mt-3" onclick="storePrice();">Save</p></a
                                >
                                </div>
                            </div>
                         </div>
                </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    <script>
                        $(document).ready(function(){
                        $("#button3").click(function(){
                            $(".special:first").addClass('active');
                            var id=1
                                $.ajax({
                                    type: 'post',
                                    url: '{{route("get-subject")}}',
                                    data: {
                                    '_token': '{{ csrf_token() }}',
                                    id:id,
                                    },
                                    success: function (response) {
                                    // alert(response);
                                    $('#subjectslist').html(response);
                                    },
                                    error: function (response) {
                                    $('#subjectslist').html(response);
                                    }
                                });
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $('#profile_photo_form').submit(function(e) {
                            e.preventDefault();
                            let formData = new FormData(this);
                            $('#image-input-error').text('');
                            $('#profile_pic_loader').show();
                            $.ajax({
                                "_token": "{{ csrf_token() }}",
                                type:'POST',
                                url: "{{route('teacher-image')}}",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: (xhr, response) => {
                                    $('#profile_pic_loader').hide();
                                    if (response) {
                                    this.reset();
                                    $('#image-input-success').text("Uploaded Succcessfully");

                                    }
                                },
                                error: (xhr, status, error)=>{
                                    if(error){
                                      $('#profile_pic_loader').hide();
                                    this.reset();
                                    var err=JSON.parse(xhr.responseText);
                                        $('#image-input-error').text(err.message + err.errors.profile_photo_input[0]);
                                    }
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $('#profile_details').submit(function(e) {
                            e.preventDefault();
                            let formData = new FormData(this);
                            $('#image-info-error').text('');
                            $('#profile_info_loader').show();
                            $.ajax({
                                "_token": "{{ csrf_token() }}",
                                type:'POST',
                                url: "{{route('teacher-info')}}",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: (response) => {
                                  $('#profile_info_loader').hide();
                                    if (response) {
                                    this.reset();
                                    $('#profile-information-sucess').text("Your information has been saved successfully.");
                                    }
                                },
                                error: function(response){
                                  $('#profile_info_loader').hide();
                                    console.log(response);
                                        $('#profile-information-error').text(response.responseJSON.errors.file);
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $('#profile_idphoto').submit(function(e) {
                            e.preventDefault();
                            let formData = new FormData(this);
                             $('#id-input-error').text('');
                            $("#profile_id_loader").show();
                            $.ajax({
                                "_token": "{{ csrf_token() }}",
                                type:'POST',
                                url: "{{route('teacher-idproof')}}",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: (response) => {
                            $("#profile_id_loader").hide();
                                    if (response) {
                                    this.reset();
                                   $('#id-input-success').text("Your image has been uploaded successfully");
                                    }
                                },
                                  error: (xhr, status, error)=>{
                                    if(error){
                                      $("#profile_id_loader").hide();
                                    this.reset();
                                    var err=JSON.parse(xhr.responseText);
                                    console.log(err)
                                        $('#id-input-error').text(err.message + err.errors.id_photo[0]);
                                    }
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        $('#experienceform').submit(function(e) {
                            e.preventDefault();
                            let formData = new FormData(this);
                            $('#image-input-error').text('');

                            $.ajax({
                                "_token": "{{ csrf_token() }}",
                                type:'POST',
                                url: "{{route('teacher-experience')}}",
                                 data: formData,
                                contentType: false,
                                processData: false,
                                success: (xhr, response) => {
                                    if (response) {
                                    this.reset();
                                    $('#experience-success').text("Data saved Succcessfully");
                                    }
                                },
                                error: (xhr, status, error)=>{
                                    if(error){
                                    this.reset();
                                    var err=JSON.parse(xhr.responseText);
                                        $('#experience-error').text("There is some error");
                                    }
                                }
                            });
                        });
                    </script>
                    <script>
                        $(".clicklink").on('click', function(){
                                    var id=this.id;
                                    	$.ajax({
                                            type: 'post',
                                            url: '{{route("get-subject")}}',
                                            data: {
                                                '_token': '{{ csrf_token() }}',
                                                id:id,
                                                },
                                            success: function (response) {
                                                // alert(response);
                                                $('#subjectslist').html(response);
                                    },
                                    error: function (response) {
                                                    $('#subjectslist').html(response);
                                                }
                                    });
                                });


                                $("#submitButton").click(function(e){
                                    e.preventDefault();
                                    var ageGroup=$("input[name='agegroup']:checked").val();
                                    var classId=1
                                    var subjectsArr=[]
                                    $("input:checkbox[class=subjects]:checked").each(function() {
                                        subjectsArr.push($(this).val());
                                    });
                                   subjectsArr=subjectsArr;
                                   $.ajax({
                                            type: 'post',
                                            url: '{{route("teacher-expertise")}}',
                                            data: {
                                                '_token': '{{ csrf_token() }}',
                                               ageGroup:ageGroup,
                                               classId:classId,
                                               subjectsArr:subjectsArr,
                                                },
                                            success: function (response) {
                                                $('#data-success').text("Your information has been saved successfully")

                                    },
                                    error: function (response) {
                                                    // $('#subjectslist').html(response);
                                                $('#data-error').text("there is some error, please try again.")
                                                }
                                    });

                                });
                                $("#submitvideo").click(function(e){
                                    e.preventDefault();
                                    var video_code=$('#video_code').val();
                                    var language_name=$('#language_name').val();
                                    var language_proficiency=$('#proficiency').val();;
                                    $('#video_loader').show();
                                   $.ajax({
                                            type: 'post',
                                            url: '{{route("teacher-expertise-data")}}',
                                            data: {
                                                '_token': '{{ csrf_token() }}',
                                               video_code:video_code,
                                               language_name:language_name,
                                               language_proficiency:language_proficiency,
                                                },
                                            success: function (response) {
                                                $('#video_loader').hide();
                                                $('#data-expertise-success').text("Your information has been saved successfully")

                                    },
                                    error: function (response) {
                                                $('#video_loader').hide();
                                                    // $('#subjectslist').html(response);
                                                $('#data-expertise-error').text("there is some error, please try again.")
                                                }

                                });
                                });
                    </script>
                    <script type="text/javascript">
                                    $(document).ready(function (e) {
                                        $('#profile_upload').change(function(){
                                            let reader = new FileReader();
                                            reader.onload = (e) => {
                                            $('#preview-image-before-upload').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(this.files[0]);
                                        });
                                    });
                    </script>
                    <script type="text/javascript">
                                    $(document).ready(function (e) {
                                         $('#id_upload').change(function(){
                                            let reader = new FileReader();
                                            reader.onload = (e) => {
                                            $('#before-id').attr('src', e.target.result);
                                            }
                                            reader.readAsDataURL(this.files[0]);
                                        });
                                        });
                    </script>

                    <script type="text/javascript">
                        $('.editbutton').on('click', function(){
                            id=this.id;
                              $.ajax({
                                  type:"GET",
                                  url:'{{route("modal-data")}}',
                                  data:{
                                      '_token': '{{ csrf_token() }}',
                                      id:id,
                                  },
                                   success: function (response) {
                                        $('#modalforedit').html(response);
                                   },
                                   error:function(error)
                                   {
                                       console.log("error in request");
                                   }
                              });
                        });
                    </script>
                    <script>
                        function storePrice(){
                            var teacher_currency=$("select[name='teacher_currency']").val();
                            var price_for_one_student=$("input[name='price_for_one_student']").val();
                            var price_for_two_student=$("input[name='price_for_two_student']").val();
                            var price_for_class=$("input[name='price_for_class']").val();
                              $.ajax({
                                  type:"POST",
                                  url:'{{route("price_info")}}',
                                  data:{
                                      '_token': '{{ csrf_token() }}',
                                      teacher_currency:teacher_currency,
                                      price_for_one_student:price_for_one_student,
                                      price_for_two_student:price_for_two_student,
                                      price_for_class:price_for_class,
                                  },
                                   success: function (response) {
                                        alert("Your information has been saved successfully")
                                   },
                                   error:function(error)
                                   {
                                       console.log("There is some problem. Please try again later. ");
                                   }
                              });

                        }
                    </script>
    @endsection
