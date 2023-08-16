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
                            <img src="{{ asset('images/profile-picture.jpg') }}" alt="profile-user"
                                class="rounded-circle" />
                            <span class="ml-1 nav-user-name hidden-sm"> {{ auth()->user()->name }}&nbsp; <i
                                    class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('home.page') }}">
                                <i class="dripicons-view-thumb text-muted mr-2"></i>Landing
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
                                <i class="fa-solid fa-house-chimney"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- navbar menu divisi ult --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Unit Layanan Terpadu')
                            <li class="has-submenu">
                                <a href="{{ route('admin.pengajuan.index') }}">
                                    <i class="fa-solid fa-file-pen"></i>
                                    <span>Pengajuan</span>
                                </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-building"></i>
                                    <span>Kelola Unit</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('admin.prodi.index') }}">
                                            <i class="fa-solid fa-graduation-cap"></i>Prodi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.divisi.index') }}">
                                            <i class="fa-solid fa-users-rectangle"></i>Divisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-user-plus"></i>User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.admin.index') }}">
                                            <i class="fa fa-user-group"></i>Admin
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <span>Kelola Layanan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{ route('admin.layanan.index') }}">
                                            <i class="fa-solid fa-hands-holding"></i>Layanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.berkas.index') }}">
                                            <i class="fa fa-folder"></i>Berkas
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Sekretaris --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Sekretaris')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Keuangan --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Keuangan')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Akademik dan Kemahasiswaan --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Akademik dan Kemahasiswaan')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Umum dan Kepegawaian --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Umum dan Kepegawaian')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Pengadaan --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Pengadaan')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Barang Milik Negara --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Barang Milik Negara')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Konsultasi --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Konsultasi')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        {{-- navbar menu divisi Other --}}
                        @if (Auth()->user()->divisi->nama_divisi == 'Other')
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fa-solid fa-file"></i>
                                    <span>Kelola Pengajuan</span>
                                </a>
                                <ul class="submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-pen"></i>Manajemen Pengajuan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-file-circle-check"></i>Daftar Pengajuan Selesai
                                        </a>
                                    </li>
                                </ul>
                                <!--end submenu-->
                            </li>
                            <!--end has-submenu-->
                        @endif

                        <!--end has-submenu-->
                    </ul><!-- End navigation menu -->
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div> <!-- end navbar-custom -->
    </div>
    <!-- Top Bar End -->
