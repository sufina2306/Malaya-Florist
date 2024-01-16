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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    <style>
        /* Gaya untuk card */
        .card {
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
        }

        .card h2 {
            text-align: center;
            color: #333;
        }


        .card p {
            font-size: 16px;
            color: #666;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('user.home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('user.produk') }}">Produk</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route ('user.galeri') }}">Galeri</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <div class="container mt-5 mb-5">
        @foreach($data->reverse() as $riwayat)
        <div class="card">
            <div class="card-body rounded mt-1 mb-1">
                <div class="row">
                    <div class="col-md-8">
                        @if($riwayat->status === 'belumdibayar')
                        <a href="/user/pembayaran/{{ $riwayat->id }}">
                            @endif
                            <blockquote class="blockquote mb-0">
                                <h5>Kode Produk: <span>{{ $riwayat->kode_produk }}</span></h5>
                                <p>Harga: Rp. <span>{{ $riwayat->harga }}</span></p>
                                <p>Status:
                                    <span style="color: {{ $riwayat->status === 'belumdibayar' ? 'color: red; cursor: pointer;' : 'color: black; cursor: default;' }}">
                                        {{ str_replace(['sudahdibayar', 'belumdibayar'], ['Sudah di bayar', 'Belum di bayar'], $riwayat->status) }}
                                    </span>
                                </p>
                            </blockquote>
                            @if($riwayat->status === 'belumdibayar')
                        </a>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <br>
                    <p>Tanggal pemesanan: <span>{{ explode(' ', $riwayat->created_at)[0] }}</span></p>

                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>





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
        </div>
        <footer class=" footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="">Malaya Florist</a>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0"></script>


</body>




</html>