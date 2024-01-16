<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Malaya Florist Admin - Home</title>
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assetsadmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />

    <link href="{{ asset('assetsadmin/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="container-scroller">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
                <a class="sidebar-brand brand-logo" href=""><img src="{{ asset('image/logo.png') }}"
                        width="100px" height="50px" alt="logo" /> </a>
                <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href=""><img
                        src="{{ asset('image/logo.png') }}" width="200px" height="50px" alt="logo" /></a>
            </div>


            <!-- Navbar -->
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">

                        <div class="nav-profile-text d-flex flex-column pr-3">
                            <h2 class="font-weight-medium mb-2 text-black">Admin</h2>
                        </div>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.home') }}">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.admin') }}">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Admin</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.produk') }}">
                        <i class="mdi mdi-cards  menu-icon"></i>
                        <span class="menu-title">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.pesanan') }}">
                        <i class="mdi mdi-shopping  menu-icon"></i>
                        <span class="menu-title ">Pesanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.galeri') }}">
                        <i class="mdi mdi-view-quilt  menu-icon"></i>
                        <span class="menu-title ">Galeri</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End navbar -->

        <div class="container-fluid page-body-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles light"></div>
                    <div class="tiles dark"></div>
                </div>
            </div>
            <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                    <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href=""><img
                            src="{{ asset('image/logo.png') }}" width="50px" height="auto" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button"
                        data-toggle="minimize">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                        <li class="nav-item nav-profile dropdown border-0">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                                <span style="margin-left: 30px;"></span>
                                <span class="profile-name ml-3">{{ Auth::user()->nama }}</span>
                            </a>
                            <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">

                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <i class="mdi mdi-logout mr-2 text-primary"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper pb-0">
                    <div class="page-header flex-wrap">
                        <h3 class="mb-0"> Hi, welcome back! <span
                                class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Admin Malaya Florist</span>
                        </h3>
                        <div class="d-flex">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                            <div class="row">
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-warning">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Total Penjualan</p>
                                                    <h2 class="text-white">Rp.{{$totalharga}}
                                                    </h2>
                                                </div>
                                                <i
                                                    class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
                                            </div>
                                            <h6 class="text-white">per Minggu</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                                    <div class="card bg-danger">
                                        <div class="card-body px-3 py-4">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="color-card">
                                                    <p class="mb-0 color-card-head">Total Pesanan</p>
                                                    <h2 class="text-white"> {{$totalpesanan}}
                                                    </h2>
                                                </div>
                                                <i
                                                    class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
                                            </div>
                                            <h6 class="text-white">per Minggu</h6>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List User</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama User</th>
                                                    <th>Nomor Telpon</th>
                                                    <th>Email</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $index => $user)
                                                <tr>
                                                    <td>{{ $user->nama}}</td>
                                                    <td>{{ $user->nohp}}</td>
                                                    <td>{{ $user->email}}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between"
                            style="padding-top: 200px;">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                Malayaflorist.com</span>
                        </div>
                    </footer>
                </div>
                <!-- main-panel ends -->

                <!-- page-body-wrapper ends -->
            </div>
            <script src="{{ asset('assetsadmin/vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('assetsadmin/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.resize.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.categories.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.stack.js') }}"></script>
            <script src="{{ asset('assetsadmin/vendors/flot/jquery.flot.pie.js') }}"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{ asset('assetsadmin/js/off-canvas.js') }}"></script>
            <script src="{{ asset('assetsadmin/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('assetsadmin/js/misc.js') }}"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="{{ asset('assetsadmin/js/dashboard.js') }}"></script>
            <!-- End custom js for this page -->

</body>

</html>
