<div class="left-side-menu left-side-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="67"  class="rounded-circle shadow-sm">
            
            <span class="leftbar-user-name">{{ auth()->user()->name }} </span>
            <h6> {{ \Carbon\Carbon::now()->format('H:i:s')}}</h6>
            

    
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
        @include('layouts._partials.menu.'.auth()->user()->role)
        {{-- check role --}}
        {{-- @if(auth()->user()->role == 'admin')
            @include('layouts._partials.menu.admin')
        @endif
        @if(auth()->user()->role == 'teacher')
            @include('layouts._partials.menu.teacher')
        @endif
        @if(auth()->user()->role == 'operation')
            @include('layouts._partials.menu.operation')
        @endif
        @if(auth()->user()->role == 'student')
            @include('layouts._partials.menu.student')
        @endif --}}
        {{-- load menu --}}

         <li class="side-nav-item">
            <a href="{{ url('admin-login') }}" class="side-nav-link">
                <i class="mdi mdi-logout-variant"></i>
                <span> Logout</span>
            </a>
        </li>
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