<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Malaya Florist Admin - Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assetsadmin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assetsadmin/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assetadmin/vendors/select2/select2.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assetsadmin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}" />
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
                <li class="nav-item ">
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Table Produk</h4>
                                </p>
                                <div class="table-responsive">
                                    <div class="card">
                                        <div class="card-body">

                                            <form action="/postEditProduk/{{ $data->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="kodeProduk">Kode Produk</label>
                                                    <input type="text" name="kodeProduk" class="form-control" required
                                                        id="kodeProduk" value="{{ $data->kode_produk }}">
                                                    <span class="text-danger">
                                                        @error('kodepProduk'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <div class="input-group-prepend">
                                                        </div>
                                                        <input type="text" name="harga" class="form-control" required
                                                            id="harga" value="{{ $data->harga }}">
                                                        <span class="text-danger">
                                                            @error('harga'){{ $message }}@enderror</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kategori">Kategori</label>
                                                    <select class="form-control" name="kategori" id="kategori" required>
                                                        @foreach ($kategori as $option)
                                                        @php
                                                        $displayText = $option;
                                                        switch ($option) {
                                                        case 'congratulations':
                                                        $displayText = 'Ucapan Selamat';
                                                        break;
                                                        case 'pernikahan':
                                                        $displayText = 'Ucapan Pernikahan';
                                                        break;
                                                        case 'duka_cita':
                                                        $displayText = 'Ucapan Duka cita';
                                                        break;
                                                        // Tambahkan kasus lain jika diperlukan
                                                        }
                                                        @endphp
                                                        <option value="{{ $option }}" @if ($option==$data->kategori)
                                                            selected @endif>{{ $displayText }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                     <div class="form-group mt-1">
        <label class="text-secondary mb-2">Foto Produk</label>
        <input class="form-control mb-2"  
            placeholder="Nama file lama: {{ $data->gambar }}" disabled>
        <input class="form-control" type="file" name="gambar">
        <img class="mt-3" style="width: 100px"
            src="{{ asset('images/' . $data->gambar) }}" alt="Foto Produk">
    </div>


                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control" name="deskripsi" id="deskripsi"
                                                        rows="4" required>{{ $data->deskripsi}}</textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary mr-2"> Update </button>
                                                <button type="button" class="btn btn-light"
                                                    onclick="window.history.back()">Cancel</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between" style="margin-top: 150px;">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright 
                            Malayaflorist.com</span>
                    </div>
                </footer>
            </div>
            <!-- main-panel ends -->
        </div>
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
