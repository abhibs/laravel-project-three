        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-mutQuam adipiscing vitae proined">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">


                        <li>
                            <a href="{{ route('admin-dashboard') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                                <i class="mdi mdi-cart-outline"></i>
                                <span> Profile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('profile') }}">Update Profile</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarCrm" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-multiple-outline"></i>
                                <span> About </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('about') }}">Update About Us</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarEmail" data-bs-toggle="collapse">
                                <i class="mdi mdi-email-multiple-outline"></i>
                                <span> Client </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('client-create') }}">Add Client</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('client') }}">All Client</a>
                                    </li>

                                </ul>
                            </div>
                        </li>



                        <li>
                            <a href="#sidebarProjects" data-bs-toggle="collapse">
                                <i class="mdi mdi-briefcase-check-outline"></i>
                                <span> Fact </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarProjects">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('fact') }}">Update Fact</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTasks" data-bs-toggle="collapse">
                                <i class="mdi mdi-clipboard-multiple-outline"></i>
                                <span> Youtube </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTasks">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('youtube') }}">Update Youtube</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarContacts" data-bs-toggle="collapse">
                                <i class="mdi mdi-book-account-outline"></i>
                                <span> Certificate </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarContacts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('certificate-create') }}">Add Certificate</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('certificate') }}">All Certificate</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTickets" data-bs-toggle="collapse">
                                <i class="mdi mdi-lifebuoy"></i>
                                <span> Review </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTickets">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('review-create') }}">Add Review</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('review') }}">All Review</a>
                                    </li>
                                </ul>
                            </div>
                        </li>




                        {{-- <li>
                            <a href="#sidebarAuth" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span> Category </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAuth">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('category-create') }}">Add Category </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category') }}">All Categories</a>
                                    </li>

                                </ul>
                            </div>
                        </li> --}}



                        <li>
                            <a href="#sidebarLayouts" data-bs-toggle="collapse">
                                <i class="mdi mdi-cellphone-link"></i>
                                <span class="badge bg-blue float-end">New</span>
                                <span> Project </span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('project-create') }}">Add Project</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project') }}">All Projects</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="mdi mdi-text-box-multiple-outline"></i>
                                <span> Team </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('team-create') }}">Add Team</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team') }}">All Teams</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                <i class="mdi mdi-black-mesa"></i>
                                <span> Package </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarBaseui">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('package-create') }}">Add Package</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('package') }}">All Packages</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        {{-- <li>
                            <a href="#sidebarExtendedui" data-bs-toggle="collapse">
                                <i class="mdi mdi-layers-outline"></i>
                                <span class="badge bg-info float-end">Hot</span>
                                <span> Extended UI </span>
                            </a>
                            <div class="collapse" id="sidebarExtendedui">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="extended-nestable.html">Nestable List</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.html">Range Slider</a>
                                    </li>

                                </ul>
                            </div>
                        </li> --}}



                        <li>
                            <a href="#sidebarIcons" data-bs-toggle="collapse">
                                <i class="mdi mdi-bullseye"></i>
                                <span> Faq </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('faq-create') }}">Add Faq</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('faq') }}">All Faqs</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarForms" data-bs-toggle="collapse">
                                <i class="mdi mdi-bookmark-multiple-outline"></i>
                                <span> Forms </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="forms-elements.html">General Elements</a>
                                    </li>
                                    <li>
                                        <a href="forms-advanced.html">Advanced</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables" data-bs-toggle="collapse">
                                <i class="mdi mdi-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="tables-basic.html">Basic Tables</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatables.html">Data Tables</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarCharts" data-bs-toggle="collapse">
                                <i class="mdi mdi-poll"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="charts-apex.html">Apex Charts</a>
                                    </li>
                                    <li>
                                        <a href="charts-flot.html">Flot Charts</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMaps" data-bs-toggle="collapse">
                                <i class="mdi mdi-map-outline"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Vector Maps</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
