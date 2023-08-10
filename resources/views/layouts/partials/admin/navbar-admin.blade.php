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
                            <a class="dropdown-item" href="{{ route('home.page') }}"><i
                                    class="dripicons-meter text-muted mr-2"></i>Landing
                                Page</a>
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
                            <a href="{{ route('admin.dashboard.page') }}">
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
                        <li class="has-submenu">
                            <a href="{{ route('admin.prodi.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                    <style>
                                        svg {
                                            fill: #f5f5f5
                                        }
                                    </style>
                                    <path
                                        d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                                </svg>
                                <span>Prodi</span>
                            </a>
                        </li>
                        <!--end has-submenu-->

                        <li class="has-submenu">
                            <a href="#">
                                <svg class="nav-svg mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M408 64H104c-22.091 0-40 17.908-40 40v304c0 22.092 17.909 40 40 40h304c22.092 0 40-17.908 40-40V104c0-22.092-17.908-40-40-40zM304 368H144v-48h160v48zm64-88H144v-48h224v48zm0-88H144v-48h224v48z" />
                                </svg>
                                <span>Manajemen Pengajuan</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.divisi') }}"> <i class="fa fa-layer-group"></i>Divisi</a>
                                </li>
                                <li><a href="{{ route('admin.admin.index') }}"> <i
                                            class="fa fa-user-group"></i>Admin</a></li>
                                <li><a href="{{ route('admin.layanan.index') }}"><i class="fa fa-cogs"></i>Layanan</a>
                                </li>
                                <li><a href="{{ route('admin.berkas.index') }}"><i class="fa fa-folder"></i>Berkas</a>
                                </li>
                            </ul>
                            <!--end submenu-->
                        </li>
                        <!--end has-submenu-->



                        <li class="has-submenu">
                            <a href="{{route('admin.pengajuan.index')}}">
                                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M70.7 164.5l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c8.9-4.3 8.9-11.3 0-15.6L272.1 67.2c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7 1.1-16.1 3.2L70.7 148.9c-8.9 4.3-8.9 11.3 0 15.6z" />
                                    <path class="svg-primary"
                                        d="M441.3 248.2s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272 291.6 272 291.6c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9.1-4.2 9.1-11.2.2-15.5z" />
                                    <path
                                        d="M441.3 347.5s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272.1 391 272.1 391c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.2 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9-4.3 9-11.3.1-15.6z" />
                                </svg>
                                <span>Pengajuan</span>
                            </a>
                            <!--end submenu-->
                        </li>
                        {{-- <li class="has-submenu">
                            <a href="/progress-pengajuan">
                                <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M70.7 164.5l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c8.9-4.3 8.9-11.3 0-15.6L272.1 67.2c-4.4-2.1-10.3-3.2-16.1-3.2s-11.7 1.1-16.1 3.2L70.7 148.9c-8.9 4.3-8.9 11.3 0 15.6z" />
                                    <path class="svg-primary"
                                        d="M441.3 248.2s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272 291.6 272 291.6c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.1 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9.1-4.2 9.1-11.2.2-15.5z" />
                                    <path
                                        d="M441.3 347.5s-30.9-14.9-35-16.9-5.2-1.9-9.5.1S272.1 391 272.1 391c-4.5 2.1-10.3 3.2-16.1 3.2s-11.7-1.1-16.1-3.2c0 0-117.3-56.6-122.8-59.3-6-2.9-7.7-2.9-13.1-.3l-33.4 16.1c-8.9 4.3-8.9 11.3 0 15.6l169.2 81.7c4.4 2.2 10.3 3.2 16.1 3.2s11.7-1.1 16.1-3.2l169.2-81.7c9-4.3 9-11.3.1-15.6z" />
                                </svg>
                                <span>Progres Pengajuan</span>
                            </a>
                            <!--end submenu-->
                        </li> --}}
                        <!--end has-submenu-->

                        <!--end has-submenu-->
                    </ul><!-- End navigation menu -->
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div> <!-- end navbar-custom -->
    </div>
    <!-- Top Bar End -->
