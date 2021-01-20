<div class="left-side-menu left-side-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">{{ auth()->user()->name }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">

        {{-- <li class="side-nav-title side-nav-item">Navigation</li> --}}

        <li class="side-nav-item">
            <a href="{{ url('admin-login') }}" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> Dashboard </span>
            </a>
        </li>

        {{-- <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span class="badge badge-info badge-pill float-right">4</span>
                <span> Dashboards </span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="dashboard-analytics.html">Analytics</a>
                </li>
                <li>
                    <a href="dashboard-crm.html">CRM</a>
                </li>
                <li>
                    <a href="index.html">Ecommerce</a>
                </li>
                <li>
                    <a href="dashboard-projects.html">Projects</a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="side-nav-title side-nav-item">Apps</li> --}}
{{-- 
        <li class="side-nav-item">
            <a href="apps-calendar.html" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Calendar </span>
            </a>
        </li> --}}

        {{-- <li class="side-nav-item">
            <a href="apps-chat.html" class="side-nav-link">
                <i class="uil-comments-alt"></i>
                <span> Chat </span>
            </a>
        </li> --}}
{{-- 
        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Ecommerce </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="apps-ecommerce-products.html">Products</a>
                </li>
                <li>
                    <a href="apps-ecommerce-products-details.html">Products Details</a>
                </li>
                <li>
                    <a href="apps-ecommerce-orders.html">Orders</a>
                </li>
                <li>
                    <a href="apps-ecommerce-orders-details.html">Order Details</a>
                </li>
                <li>
                    <a href="apps-ecommerce-customers.html">Customers</a>
                </li>
                <li>
                    <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                </li>
                <li>
                    <a href="apps-ecommerce-checkout.html">Checkout</a>
                </li>
                <li>
                    <a href="apps-ecommerce-sellers.html">Sellers</a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-envelope"></i>
                <span> Email </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="apps-email-inbox.html">Inbox</a>
                </li>
                <li>
                    <a href="apps-email-read.html">Read Email</a>
                </li>
            </ul>
        </li> --}}

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                {{-- <i class="uil-briefcase"></i> --}}
                <i class="mdi mdi-teach"></i>
                <span> Teacher </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{ url('/add-teacher') }}">Add Teacher</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-briefcase"></i>
                <span> Create Batch </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="apps-projects-list.html">Add Batch</a>
                </li>
                <li>
                    <a href="apps-projects-details.html">Manage Batch</a>
                </li>
                <li>
                    <a href="apps-projects-gantt.html">Add Student <span class="badge badge-pill badge-dark-lighten font-10 float-right">New</span></a>
                </li>
            </ul>
        </li>
{{-- 
        <li class="side-nav-item">
            <a href="apps-social-feed.html" class="side-nav-link">
                <i class="uil-rss"></i>
                <span> Social Feed </span>
            </a>
        </li> --}}
{{-- 
        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Tasks </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="apps-tasks.html">List</a>
                </li>
                <li>
                    <a href="apps-tasks-details.html">Details</a>
                </li>
                <li>
                    <a href="apps-kanban.html">Kanban Board</a>
                </li>
            </ul>
        </li> --}}
{{-- 
        <li class="side-nav-item">
            <a href="apps-file-manager.html" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> File Manager </span>
            </a>
        </li> --}}

        {{-- <li class="side-nav-title side-nav-item">Product</li> --}}

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-copy-alt"></i>
                <span> Product </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="pages-profile.html">Add Product</a>
                </li>
                <li>
                    <a href="pages-profile-2.html">Manage Product</a>
                </li>
                <li>
                    <a href="pages-profile-2.html">Add Student</a>
                </li>
            </ul>
        </li>


         <li class="side-nav-item">
            <a href="{{ url('admin-login') }}" class="side-nav-link">
                <i class="mdi mdi-logout-variant"></i>
                <span> Logout</span>
            </a>
        </li>
{{--             
                <li class="side-nav-item">
                    <a href="javascript: void(0);" aria-expanded="false">Authentication
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-third-level" aria-expanded="false">
                        <li>
                            <a href="pages-login.html">Login</a>
                        </li>
                        <li>
                            <a href="pages-login-2.html">Login 2</a>
                        </li>
                        <li>
                            <a href="pages-register.html">Register</a>
                        </li>
                        <li>
                            <a href="pages-register-2.html">Register 2</a>
                        </li>
                        <li>
                            <a href="pages-logout.html">Logout</a>
                        </li>
                        <li>
                            <a href="pages-logout-2.html">Logout 2</a>
                        </li>
                        <li>
                            <a href="pages-recoverpw.html">Recover Password</a>
                        </li>
                        <li>
                            <a href="pages-recoverpw-2.html">Recover Password 2</a>
                        </li>
                        <li>
                            <a href="pages-lock-screen.html">Lock Screen</a>
                        </li>
                        <li>
                            <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                        </li>
                        <li>
                            <a href="pages-confirm-mail.html">Confirm Mail</a>
                        </li>
                        <li>
                            <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                        </li>
                    </ul>
                </li> 
                <li class="side-nav-item">
                    <a href="javascript: void(0);" aria-expanded="false">Error
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-third-level" aria-expanded="false">
                        <li>
                            <a href="pages-404.html">Error 404</a>
                        </li>
                        <li>
                            <a href="pages-404-alt.html">Error 404-alt</a>
                        </li>
                        <li>
                            <a href="pages-500.html">Error 500</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages-starter.html">Starter Page</a>
                </li>
                <li>
                    <a href="pages-preloader.html">With Preloader</a>
                </li>
                <li>
                    <a href="pages-timeline.html">Timeline</a>
                </li> --}}
            </ul>
        </li>
{{-- 
        <li class="side-nav-item">
            <a href="landing.html" target="_blank" class="side-nav-link">
                <i class="uil-globe"></i>
                <span class="badge badge-light float-right">New</span>
                <span> Landing </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-window"></i>
                <span> Layouts </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="layouts-horizontal.html">Horizontal</a>
                </li>
                <li>
                    <a href="layouts-vertical.html">Vertical</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-title side-nav-item mt-1">Components</li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-box"></i>
                <span> Base UI </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="ui-accordions.html">Accordions</a>
                </li>
                <li>
                    <a href="ui-alerts.html">Alerts</a>
                </li>
                <li>
                    <a href="ui-avatars.html">Avatars</a>
                </li>
                <li>
                    <a href="ui-badges.html">Badges</a>
                </li>
                <li>
                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                </li>
                <li>
                    <a href="ui-buttons.html">Buttons</a>
                </li>
                <li>
                    <a href="ui-cards.html">Cards</a>
                </li>
                <li>
                    <a href="ui-carousel.html">Carousel</a>
                </li>
                <li>
                    <a href="ui-dropdowns.html">Dropdowns</a>
                </li>
                <li>
                    <a href="ui-embed-video.html">Embed Video</a>
                </li>
                <li>
                    <a href="ui-grid.html">Grid</a>
                </li>
                <li>
                    <a href="ui-list-group.html">List Group</a>
                </li>
                <li>
                    <a href="ui-media-object.html">Media Object</a>
                </li>
                <li>
                    <a href="ui-modals.html">Modals</a>
                </li>
                <li>
                    <a href="ui-notifications.html">Notifications</a>
                </li>
                <li>
                    <a href="ui-pagination.html">Pagination</a>
                </li>
                <li>
                    <a href="ui-popovers.html">Popovers</a>
                </li>
                <li>
                    <a href="ui-progress.html">Progress</a>
                </li>
                <li>
                    <a href="ui-ribbons.html">Ribbons</a>
                </li>
                <li>
                    <a href="ui-spinners.html">Spinners</a>
                </li>
                <li>
                    <a href="ui-tabs.html">Tabs</a>
                </li>
                <li>
                    <a href="ui-tooltips.html">Tooltips</a>
                </li>
                <li>
                    <a href="ui-typography.html">Typography</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-package"></i>
                <span> Extended UI </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="extended-dragula.html">Dragula</a>
                </li>
                <li>
                    <a href="extended-range-slider.html">Range Slider</a>
                </li>
                <li>
                    <a href="extended-ratings.html">Ratings</a>
                </li>
                <li>
                    <a href="extended-scrollbar.html">Scrollbar</a>
                </li>
                <li>
                    <a href="extended-scrollspy.html">Scrollspy</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="widgets.html" class="side-nav-link">
                <i class="uil-layer-group"></i>
                <span> Widgets </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-streering"></i>
                <span> Icons </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="icons-dripicons.html">Dripicons</a>
                </li>
                <li>
                    <a href="icons-mdi.html">Material Design</a>
                </li>
                <li>
                    <a href="icons-unicons.html">Unicons</a>
                </li>
            </ul>
        </li> --}}
{{-- 
        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-document-layout-center"></i>
                <span> Forms </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="form-elements.html">Basic Elements</a>
                </li>
                <li>
                    <a href="form-advanced.html">Form Advanced</a>
                </li>
                <li>
                    <a href="form-validation.html">Validation</a>
                </li>
                <li>
                    <a href="form-wizard.html">Wizard</a>
                </li>
                <li>
                    <a href="form-fileuploads.html">File Uploads</a>
                </li>
                <li>
                    <a href="form-editors.html">Editors</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-chart"></i>
                <span> Charts </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li class="side-nav-item">
                    <a href="javascript: void(0);" aria-expanded="false">Apex Charts
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-third-level" aria-expanded="false">
                        <li>
                            <a href="charts-apex-area.html">Area</a>
                        </li>
                        <li>
                            <a href="charts-apex-bar.html">Bar</a>
                        </li>
                        <li>
                            <a href="charts-apex-bubble.html">Bubble</a>
                        </li>
                        <li>
                            <a href="charts-apex-candlestick.html">Candlestick</a>
                        </li>
                        <li>
                            <a href="charts-apex-column.html">Column</a>
                        </li>
                        <li>
                            <a href="charts-apex-heatmap.html">Heatmap</a>
                        </li>
                        <li>
                            <a href="charts-apex-line.html">Line</a>
                        </li>
                        <li>
                            <a href="charts-apex-mixed.html">Mixed</a>
                        </li>
                        <li>
                            <a href="charts-apex-pie.html">Pie</a>
                        </li>
                        <li>
                            <a href="charts-apex-radar.html">Radar</a>
                        </li>
                        <li>
                            <a href="charts-apex-radialbar.html">RadialBar</a>
                        </li>
                        <li>
                            <a href="charts-apex-scatter.html">Scatter</a>
                        </li>
                        <li>
                            <a href="charts-apex-sparklines.html">Sparklines</a>
                        </li>
        
                    </ul>
                </li>
                <li>
                    <a href="charts-brite.html">Britecharts</a>
                </li>
                <li>
                    <a href="charts-chartjs.html">Chartjs</a>
                </li>
                <li>
                    <a href="charts-sparkline.html">Sparklines</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-table"></i>
                <span> Tables </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="tables-basic.html">Basic Tables</a>
                </li>
                <li>
                    <a href="tables-datatable.html">Data Tables</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-location-point"></i>
                <span> Maps </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li>
                    <a href="maps-google.html">Google Maps</a>
                </li>
                <li>
                    <a href="maps-vector.html">Vector Maps</a>
                </li>
            </ul>
        </li>

        <li class="side-nav-item">
            <a href="javascript: void(0);" class="side-nav-link">
                <i class="uil-folder-plus"></i>
                <span> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="side-nav-second-level" aria-expanded="false">
                <li class="side-nav-item">
                    <a href="javascript: void(0);" aria-expanded="false">Second Level
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-third-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Item 1</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Item 2</a>
                        </li>
                    </ul>
                </li>
                <li class="side-nav-item">
                    <a href="javascript: void(0);" aria-expanded="false">Third Level
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="side-nav-third-level" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Item 1</a>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" aria-expanded="false">Item 2
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-forth-level" aria-expanded="false">
                                <li>
                                    <a href="javascript: void(0);">Item 2.1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Item 2.2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> --}}

    </ul>

    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>