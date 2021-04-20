@extends('layouts.teacher_dashboard')

@section('content')
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="student_dashboard navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="{{url("/")}}"
        >
          <div class="sidebar-brand-icon">
            <img src="{{asset('wa/teacherdashboard/img/logo.png')}}" title="logo" alt="logo" />
          </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <div class="nav_images">
              <img src="{{asset('wa/teacherdashboard/img/teacher/live-icon.svg')}}" />
            </div>
            <br />
            <span>Live Classes</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        <li class="nav-item">
          <a class="nav-link collapsed" href="#">
            <div class="nav_images">
              <img src="{{asset('wa/teacherdashboard/img/teacher/one to one.svg')}}" />
            </div>
            <br />
            <span>One to One</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#">
            <div class="nav_images">
              <img src="{{asset('wa/teacherdashboard/img/teacher/user-icon.svg')}}" />
            </div>
            <br />
            <span>Profile</span>
          </a>
        </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="#">
            <div class="nav_images">
              <img src="{{asset('wa/teacherdashboard/img/teacher/videoconference.svg')}}" />
            </div>
            <br />

            <span>Manage Questions</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <div class="nav_images"><img src="{{asset('wa/teacherdashboard/img/teacher/setting.svg')}}" /></div>
            <br />

            <span>Settings</span>
          </a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <div class="nav_images"><img src="{{asset('wa/teacherdashboard/img/calender.svg')}}" /></div>
            <br />
            <span>Calender</span>
          </a>
        </li>
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1 pl-5">
          <a
            class="dropdown-toggle"
            href="#"
            id="alertsDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
          </a>
          <!-- Dropdown - Alerts -->
          <div
            class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown"
          >
            <h6 class="dropdown-header">Alerts Center</h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fas fa-file-alt text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 12, 2019</div>
                <span class="font-weight-bold"
                  >A new monthly report is ready to download!</span
                >
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fas fa-donate text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 7, 2019</div>
                $290.29 has been deposited into your account!
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500">December 2, 2019</div>
                Spending Alert: We've noticed unusually high spending for your
                account.
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#"
              >Show All Alerts</a
            >
          </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>

      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>
            <!-- Topbar Search -->
            <div class="dashboard_title">My Dashboard</div>
            <form class="d-none d-sm-inline-block form-inline navbar-search">
              <div class="d-flex">
                <div class="input-group">
                  <select class="form-control border-0 nav_border_line">
                    <optgroup>
                      <option value="volvo">all</option>
                      <option value="saab">all1</option>
                    </optgroup>
                  </select>
                  <input
                    type="text"
                    class="serch_block bg-white form-control bg-light border-0 small"
                    placeholder="Search for..."
                    aria-label="Search"
                    aria-describedby="basic-addon2"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-primary search_cta" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <div class="text-center">
                    <img
                      class="img-profile rounded-circle"
                      src="{{asset('wa/teacherdashboard/img/undraw_profile.svg')}}"
                    />
                  </div>
                  <div class="mr-2 d-none d-lg-inline text-gray-600 small">
                    Douglas McGee
                  </div>
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
    </form>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800 session_heading">My Session</h1>
            </div>
            <!-- image block -->
            <div class="row">
              <div class="col-xl-8 col-lg-8">
                <div class="container mt-5">
                  <ul class="nav nav-pills nav-fill navtop">
                    <li class="nav-item">
                      <a
                        class="nav-link tab_title active"
                        href="#menu1"
                        data-toggle="tab"
                        >today</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link tab_title"
                        href="#menu2"
                        data-toggle="tab"
                        >Upcoming</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link tab_title"
                        href="#menu3"
                        data-toggle="tab"
                        >This Week</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        class="nav-link tab_title"
                        href="#menu4"
                        data-toggle="tab"
                        >This Month</a
                      >
                    </li>
                  </ul>
                  <div class="add_class">+Add Class</div>
                  <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="menu1">
                        <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color1"
                        >
                        <x-row/>
                        </div>
                        </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color2"
                        >
                          <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color3"
                        >
                        <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color4"
                        >
                        <x-row/>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="menu2">
                                              <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color1"
                        >
                        <x-row/>
                        </div>
                        </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color2"
                        >
                          <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color3"
                        >
                        <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color4"
                        >
                        <x-row/>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="menu3">
                     <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color1"
                        >
                        <x-row/>
                        </div>
                        </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color2"
                        >
                          <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color3"
                        >
                        <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color4"
                        >
                        <x-row/>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="menu4">
                                              <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color1"
                        >
                        <x-row/>
                        </div>
                        </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color2"
                        >
                          <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color3"
                        >
                        <x-row/>
                        </div>
                      </div>
                      <div class="card shadow mt-3">
                        <div
                          class="card-body card_left_border border_left_color4"
                        >
                        <x-row/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                  <div class="mt-5">
                      <!-- <div><img src="img/newcalander.svg" width="50" height="50"></div> -->
                      <div class="calander_block">
                        <p>
                          <img src="{{asset('wa/teacherdashboard/img/newcalander.svg')}}"><span class="pl-3">Scheduled Classes</span>
                        </p>
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
                            <div class="col-3"><p class="month_text">March 2021</p></div>
                            <div class="col-9">
                              <div class="day_block date_p">
                                <p><img src="{{asset('wa/teacherdashboard/img/arrow-left.svg')}}"></p>
                                <p class="active">11</p>
                                <p>12</p>
                                <p>13</p>
                                <p>14</p>
                                <p>15</p>
                                <p>16</p>
                                <p>17</p>
                                <p><img src="{{asset('wa/teacherdashboard/img/arrow-right.svg')}}"></p>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <div class="table_detail">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td><span class="active_time tooltip">
                                        <span class="time-block tooltiptext">Math Practice</span>
                                      </span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
                                      <td></td>
                                      <td><span></span></td>
                                      <td></td>
                                      <td><span></span></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td class="time_td">10:30-11:00</td>
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
            </div>
            <!-- Content Row -->
 <!-- subject card Row -->
 <section>
    <div class="row">
        <div class="col-lg-12 mb-3">

                <div class="session_heading">
                    <h6 class="m-0">Session Details
                     </h6>
                </div>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="left_section">
                        <div class="card_header">
                          <div class="table-responsive" id="sailorTableArea">
                            <table
                              id="sailorTable"
                              class="table table-striped table-bordered"
                              width="100%"
                            >
                              <thead>
                                <tr class="">
                                  <th class="card_heading">Sessions</th>
                                  <th class="card_heading">Topic</th>
                                  <th class="card_heading">Date</th>
                                  <th class="card_heading">Time</th>
                                  <th class="card_heading">Date</th>
                                  <th class="card_heading">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr class="session_card">
                                  <td class="session_no">Session-1</td>
                                  <td class="session_no">Numbers</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">21:30 PM</td>
                                  <td class="session_date">2021-03-10</td>
                                  <td class="session_date">
                                      <div class="">
                                        <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/eye.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                          <div class="session tooltip"><img src="{{asset('wa/teacherdashboard/img/circle-tool.svg')}}" width="20" height="20">
                                            <span class="session tooltiptext">Tooltip text</span>
                                          </div>
                                      </div>
                                  </td>
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
</section>
            <!-- subject card Row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
      </div>
    </div>
    </body>
@endsection
