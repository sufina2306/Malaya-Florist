<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>
        Produk-Malaya Florist
    </title>
    <!-- slider stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    <style>
    .col-sm-6 {
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
    }

    .box {
        position: relative;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        margin-bottom: 20px;
        /* Memberi jarak antar card */
    }

    .box:hover {
        transform: translateY(-5px);
    }

    .img-box img {
        width: 100%;
        height: auto;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .detail-box {
        padding: 10px;
    }


    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* jika ingin posisi vertikal juga menjadi tengah */
    }

    .img-box img {
        width: 100%;
        height: auto;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .detail-box {
        padding: 10px;
    }

    h6 {
        margin: 0;
    }
    </style>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('user.home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('user.produk') }}">Produk</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('user.galeri') }}">Galeri</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>{{ Auth::user()->nama }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route ('user.riwayatpemesanan') }}">
                                    Riwayat Pemesanan
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->
    </div>
    <!-- end hero area -->
    <div class="row mt-5 justify-content-end">
        <div class="col-6"></div>
        <div class="col-6 mr-5">
            <form action="" method="GET">
                @csrf
                <div class="input-group">
                    <select name="kategori" class="form-select rounded" aria-label="kategori Filter">
                        <option value="">Pilih Kategori</option>
                        <option value="congratulations">Ucapan Selamat</option>
                        <option value="pernikahan">Pernikahan</option>
                        <option value="duka_cita">Duka Cita</option>
                    </select>
                    <button type="submit" class="btn btn-outline-primary ml-2">Filter</button>
                </div>
            </form>
        </div>
    </div>
    <section class="shop_section layout_padding">
        <div class="container">

           <div class="row">
    @foreach ($data->reverse() as $produk)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
                <a href="{{ route('user.detailproduk', ['id' => $produk->id]) }}">
                    <span class="p-4"></span>
                    <div class="img-box">
                        <img src="{{ asset('images/' . $produk->gambar) }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h6>
                            {{ $produk->kode_produk }}
                        </h6>
                        <h6>
                            <span>Rp.{{ $produk->harga }}</span>
                        </h6>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>

        </div>
        </div>
    </section>


    <!-- footer section -->
    <section class="info_section  layout_padding2-top">
        <div class="social_container">
        </div>
        <div class="info_container ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            TENTANG WEBSITE
                        </h6>
                        <p>
                            Menyajikan koleksi papan bunga eksklusif yang dirancang dengan cinta
                            dan kreativitas untuk memenuhi berbagai kebutuhan anda, mulai dari
                            ucapan selamat, hingga momen-momen istimewa anda.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                            <h5>
                                Media Sosial
                            </h5>
                            <a href="">Facebook</a><br>
                            <a href="">Instagram</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                            <h5>
                                Produk
                            </h5>
                            <p>Papan Ucapan Selamat</p>
                            <p>Papan Ucapan Duka Cita</p>
                            <p>Papan Ucapan Pernikahan</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>
                            Kontak kami
                        </h6>
                        <div class="info_link-box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Politeknik Negeri Bengkalis</span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+6282285000332</span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span> Malaya@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class=" footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Malaya Florist</a>
                </p>
            </div>
        </footer>

    </section>
    <!-- end footer section -->

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>

</body>


</html>
