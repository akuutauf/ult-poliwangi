    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="topbar-main">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="#" class="logo">
                    <span>
                        <img src="{{ asset('images/logo-title-poliwangi.png') }}" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="{{ asset('images/logo-poliwangi.png') }}" alt="logo-large" class="logo-lg">
                    </span>
                </a>
            </div>
            <!--topbar-left-->
            <!--end logo-->
            <!--end topbar-nav-->
            <ul class="list-unstyled topbar-nav float-right mb-0">
                @auth
                    <li class="dropdown ">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user pr-0" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ asset('template/assets/images/users/user-4.jpg') }}" alt="profile-user"
                                class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> {{ auth()->user()->name }}&nbsp; <i
                                    class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i>
                                Profile</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My
                                Wallet</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i>
                                Settings</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock
                                screen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('do.logout') }}"><i
                                    class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- end navbar-->



        <!-- MENU Start -->
        <div class="navbar-custom-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="{{ route('admin.home.page') }}">
                                <svg class="nav-svg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92 92">
                                    <path class="svg-primary" id="XMLID_1197_"
                                        d="M90.8,22.9C90.1,22.2,89.1,22,88,22H67V10c0-2.2-2-4-4.2-4H29.2C27,6,25,7.8,25,10v12H4
                                        c-2.2,0-4,1.3-4,3.5V82c0,2.2,1.8,4,4,4h84c2.2,0,4-1.8,4-4l0-56.3C92,24.6,91.6,23.7,90.8,22.9z M33,14h26v8H33V14z M84,78H8V30h76
                                        L84,78z">
                                    </path>
                                    <path
                                        d=" M29.7,53.5c0-1.9,1.6-3.5,3.5-3.5H42v-8.9c0-1.9,1.6-3.5,3.5-3.5s3.5,1.6,3.5,3.5V50h9.8c1.9,0,3.5,1.6,3.5,3.5
                                        S60.7,57,58.8,57H49v9.4c0,1.9-1.6,3.5-3.5,3.5S42,68.4,42,66.4V57h-8.8C31.3,57,29.7,55.4,29.7,53.5z">
                                    </path>
                                </svg>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <svg class="nav-svg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M408 64H104c-22.091 0-40 17.908-40 40v304c0 22.092 17.909 40 40 40h304c22.092 0 40-17.908 40-40V104c0-22.092-17.908-40-40-40zM304 368H144v-48h160v48zm64-88H144v-48h224v48zm0-88H144v-48h224v48z" />
                                </svg>
                                <span>Manajaemen Berkas</span>
                            </a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-user-group"></i>Kategori</a>
                                    <ul class="submenu">
                                        <li><a href="/dosen">Dosen</a></li>
                                        <li><a href="/mahasiswa">Mahasiswa</a></li>
                                        <li><a href="/masyarakat">Masyarakat/Umum</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <!--end submenu-->
                        </li>
                        <!--end has-submenu-->



                        <li class="has-submenu">
                            <a href="#">
                                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M70.7 164.5l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c8.9-4.3 8.9-11.3 0-15.6L272.1 67.2c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7 1.1-16.1 3.2L70.7 148.9c-8.9 4.3-8.9 11.3 0 15.6z" />
                                    <path class="svg-primary"
                                        d="M441.3 248.2s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272 291.6 272 291.6c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9.1-4.2 9.1-11.2.2-15.5z" />
                                    <path
                                        d="M441.3 347.5s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272.1 391 272.1 391c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.2 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9-4.3 9-11.3.1-15.6z" />
                                </svg>
                                <span>UI Kit</span>
                            </a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-view-thumb"></i>UI Elements</a>
                                    <ul class="submenu">
                                        <li><a href="../others/ui-bootstrap.html">Bootstrap</a></li>
                                        <li><a href="../others/ui-animation.html">Animation</a></li>
                                        <li><a href="../others/ui-avatar.html">Avatar</a></li>
                                        <li><a href="../others/ui-clipboard.html">Clip Board</a></li>
                                        <li><a href="../others/ui-files.html">File Manager</a></li>
                                        <li><a href="../others/ui-ribbons.html">Ribbons</a></li>
                                        <li><a href="../others/ui-dragula.html">Dragula</a></li>
                                        <li><a href="../others/ui-check-radio.html">Check & Radio</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-anchor"></i>Advanced UI</a>
                                    <ul class="submenu">
                                        <li><a href="../others/advanced-rangeslider.html">Range Slider</a></li>
                                        <li><a href="../others/advanced-sweetalerts.html">Sweet Alerts</a></li>
                                        <li><a href="../others/advanced-nestable.html">Nestable List</a></li>
                                        <li><a href="../others/advanced-ratings.html">Ratings</a></li>
                                        <li><a href="../others/advanced-highlight.html">Highlight</a></li>
                                        <li><a href="../others/advanced-session.html">Session Timeout</a></li>
                                        <li><a href="../others/advanced-idle-timer.html">Idle Timer</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-document"></i>Forms</a>
                                    <ul class="submenu">
                                        <li><a href="../others/forms-elements.html">Basic Elements</a></li>
                                        <li><a href="../others/forms-advanced.html">Advance Elements</a></li>
                                        <li><a href="../others/forms-validation.html">Validation</a></li>
                                        <li><a href="../others/forms-wizard.html">Wizard</a></li>
                                        <li><a href="../others/forms-editors.html">Editors</a></li>
                                        <li><a href="../others/forms-repeater.html">Repeater</a></li>
                                        <li><a href="../others/forms-x-editable.html">X Editable</a></li>
                                        <li><a href="../others/forms-uploads.html">File Upload</a></li>
                                        <li><a href="../others/forms-img-crop.html">Image Crop</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-graph-line"></i>Charts</a>
                                    <ul class="submenu">
                                        <li><a href="../others/charts-apex.html">Apex</a></li>
                                        <li><a href="../others/charts-morris.html">Morris</a></li>
                                        <li><a href="../others/charts-chartist.html">Chartist</a></li>
                                        <li><a href="../others/charts-flot.html">Flot</a></li>
                                        <li><a href="../others/charts-peity.html">Peity</a></li>
                                        <li><a href="../others/charts-chartjs.html">Chartjs</a></li>
                                        <li><a href="../others/charts-sparkline.html">Sparkline</a></li>
                                        <li><a href="../others/charts-knob.html">Jquery Knob</a></li>
                                        <li><a href="../others/charts-justgage.html">JustGage</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-view-list-large"></i>Tables </a>
                                    <ul class="submenu">
                                        <li><a href="../others/tables-basic.html">Basic</a></li>
                                        <li><a href="../others/tables-datatable.html">Datatables</a></li>
                                        <li><a href="../others/tables-responsive.html">Responsive</a></li>
                                        <li><a href="../others/tables-footable.html">Footable</a></li>
                                        <li><a href="../others/tables-jsgrid.html">Jsgrid</a></li>
                                        <li><a href="../others/tables-editable.html">Editable</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-headset"></i>Icons</a>
                                    <ul class="submenu">
                                        <li><a href="../others/icons-materialdesign.html">Material Design</a></li>
                                        <li><a href="../others/icons-dripicons.html">Dripicons</a></li>
                                        <li><a href="../others/icons-fontawesome.html">Font awesome</a></li>
                                        <li><a href="../others/icons-themify.html">Themify</a></li>
                                        <li><a href="../others/icons-typicons.html">Typicons</a></li>
                                        <li><a href="../others/icons-emoji.html">Emoji</a></li>
                                        <li><a href="../others/icons-svg.html">SVG</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-map"></i>Maps</a>
                                    <ul class="submenu">
                                        <li><a href="../others/maps-google.html">Google Maps</a></li>
                                        <li><a href="../others/maps-vector.html">Vector Maps</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-mail"></i>Email</a>
                                    <ul class="submenu">
                                        <li><a href="../others/email-inbox.html">Inbox</a></li>
                                        <li><a href="../others/email-read.html">Read Email</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                                <li class="has-submenu">
                                    <a href="#"><i class="dripicons-article"></i>Email Templates</a>
                                    <ul class="submenu">
                                        <li><a href="../others/email-templates-basic.html">Basic Action Email</a></li>
                                        <li><a href="../others/email-templates-alert.html">Alert Email</a></li>
                                        <li><a href="../others/email-templates-billing.html">Billing Email</a></li>
                                    </ul>
                                </li>
                                <!--end has-submenu-->
                            </ul>
                            <!--end submenu-->
                        </li>
                        <!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <svg class="nav-svg" version="1.1" id="Layer_4"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M462.5,352.3c-1.9-5.5-5.6-11.5-11.4-18.3c-10.2-12-30.8-29.3-54.8-47.2c-2.6-2-6.4-0.8-7.5,2.3l-4.7,13.4
                                            c-0.7,2,0,4.3,1.7,5.5c15.9,11.6,35.9,27.9,41.8,35.9c2,2.8-0.5,6.6-3.9,5.8c-10-2.3-29-7.3-44.2-12.8c-8.6-3.1-17.7-6.7-27.2-10.6
                                            c16-20.8,24.7-46.3,24.7-72.6c0-32.8-13.2-63.6-37.1-86.4c-22.9-21.9-53.8-34.1-85.7-33.7c-25.7,0.3-50.1,8.4-70.7,23.5
                                            c-18.3,13.4-32.2,31.3-40.6,52c-8.3-6-16.1-11.9-23.2-17.6c-13.7-10.9-28.4-22-38.7-34.7c-2.2-2.8,0.9-6.7,4.4-5.9
                                            c11.3,2.6,35.4,10.9,56.4,18.9c1.5,0.6,3.2,0.3,4.5-0.8l11.1-10.1c2.4-2.1,1.7-6-1.3-7.2C121,137.4,89.2,128,73.2,128
                                            c-11.5,0-19.3,3.5-23.3,10.4c-7.6,13.3,7.1,35.2,45.1,66.8c34.1,28.5,82.6,61.8,136.5,92c87.5,49.1,171.1,81,208,81
                                            c11.2,0,18.7-3.1,22.1-9.1C464.4,364.4,464.7,358.7,462.5,352.3z" />
                                        <path class="svg-primary"
                                            d="M312,354c-29.1-12.8-59.3-26-92.6-44.8c-30.1-16.9-59.4-36.5-84.4-53.6c-1-0.7-2.2-1.1-3.4-1.1c-0.9,0-1.9,0.2-2.8,0.7
                                            c-2,1-3.3,3-3.3,5.2c0,1.2-0.1,2.4-0.1,3.5c0,32.1,12.6,62.3,35.5,84.9c22.9,22.7,53.4,35.2,85.8,35.2c23.6,0,46.5-6.7,66.2-19.5
                                            c1.9-1.2,2.9-3.3,2.7-5.5C315.5,356.8,314.1,354.9,312,354z" />
                                    </g>
                                </svg>
                                <span>Pages</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="../pages/pages-profile.html"><i class="dripicons-user"></i>Profile</a>
                                </li>
                                <li><a href="../pages/pages-chat.html"><i class="dripicons-conversation"></i>Chat</a>
                                </li>
                                <li><a href="../pages/pages-contact-list.html"><i
                                            class="dripicons-user-id"></i>Contact
                                        List</a></li>
                                <li><a href="../pages/pages-tour.html"><i class="dripicons-rocket"></i>Tour</a></li>
                                <li><a href="../pages/pages-timeline.html"><i class="dripicons-clock"></i>Timeline</a>
                                </li>
                                <li><a href="../pages/pages-invoice.html"><i
                                            class="dripicons-document"></i>Invoice</a>
                                </li>
                                <li><a href="../pages/pages-treeview.html"><i
                                            class="dripicons-network-3"></i>Treeview</a>
                                </li>
                                <li><a href="../pages/pages-starter.html"><i
                                            class="dripicons-clipboard"></i>Starter</a>
                                </li>
                                <li><a href="../pages/pages-pricing.html"><i class="dripicons-article"></i>Pricing</a>
                                </li>
                                <li><a href="../pages/pages-blogs.html"><i class="dripicons-blog"></i>Blogs</a></li>
                                <li><a href="../pages/pages-faq.html"><i class="dripicons-question"></i>FAQ</a></li>
                                <li><a href="../pages/pages-gallery.html"><i
                                            class="dripicons-photo-group"></i>Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <svg class="nav-svg" version="1.1" id="Layer_5"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <path class="svg-primary"
                                            d="M376,192h-24v-46.7c0-52.7-42-96.5-94.7-97.3c-53.4-0.7-97.3,42.8-97.3,96v48h-24c-22,0-40,18-40,40v192c0,22,18,40,40,40
                                                h240c22,0,40-18,40-40V232C416,210,398,192,376,192z M270,316.8v68.8c0,7.5-5.8,14-13.3,14.4c-8,0.4-14.7-6-14.7-14v-69.2
                                                c-11.5-5.6-19.1-17.8-17.9-31.7c1.4-15.5,14.1-27.9,29.6-29c18.7-1.3,34.3,13.5,34.3,31.9C288,300.7,280.7,311.6,270,316.8z
                                                    M324,192H188v-48c0-18.1,7.1-35.1,20-48s29.9-20,48-20s35.1,7.1,48,20s20,29.9,20,48V192z" />
                                    </g>
                                </svg>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="../authentication/auth-login.html"><i class="dripicons-enter"></i>Log
                                        In</a></li>
                                <li><a href="../authentication/auth-register.html"><i
                                            class="dripicons-pencil"></i>Register</a></li>
                                <li><a href="../authentication/auth-recover-pw.html"><i
                                            class="dripicons-clockwise"></i>Recover Password</a></li>
                                <li><a href="../authentication/auth-lock-screen.html"><i
                                            class="dripicons-lock"></i>Lock
                                        Screen</a></li>
                                <li><a href="../authentication/auth-404.html"><i class="dripicons-warning"></i>Error
                                        404</a></li>
                                <li><a href="../authentication/auth-500.html"><i class="dripicons-wrong"></i>Error
                                        500</a></li>
                            </ul>
                        </li>
                        <!--end has-submenu-->
                    </ul><!-- End navigation menu -->
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div> <!-- end navbar-custom -->
    </div>
    <!-- Top Bar End -->
