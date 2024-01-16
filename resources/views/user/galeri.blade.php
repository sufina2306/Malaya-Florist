<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">



    <style>
    #modalImage {
        max-width: 100%;
        max-height: 200vh;
        /* Sesuaikan dengan tinggi maksimum yang diinginkan */
        display: block;
        margin: auto;
    }

    /* CSS untuk mengatur ukuran gambar ikon panah */
    #imageModal .modal-footer .btn img {
        width: 20px;
        /* Sesuaikan ukuran yang diinginkan */
        height: auto;
    }
    </style>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route ('user.home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('user.produk') }}">Produk</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href=" ">Galeri</a>
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
        <!-- slider section -->

        <section class="slider_section">
            <div class="slider_container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <h1>
                                                Selamat Datang di <br> Galeri Malaya Florist
                                            </h1>
                                            <p>
                                                Website penyedia layanan pemesanan papan bunga praktis dan terpercaya
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="img-box">
                                            <img src="{{ asset('image/aha.png') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="carousel-item ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <h1>
                                                Pesan Papan Bunga Tanpa Ribet<br>
                                            </h1>
                                            <p>
                                                Temukan berbagai desain papan bunga terbaik sesuai keinginan anda tanpa
                                                ribet
                                            </p>

                                        </div>

                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="img-box">
                                            <img src="{{ asset('image/A(4).jpeg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel_btn-box">
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <img src="images/line.png" alt="" />
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Galeri Desain
                </h2>
            </div>
            <div class="row">
                @foreach($data as $galeri)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a href="{{ asset('images/' . $galeri->gambar) }}" data-toggle="modal" data-target="#imageModal"
                        data-title="{{$galeri->judul}}" data-image="{{ asset('images/' . $galeri->gambar) }}">
                        <img src="{{ asset('images/' . $galeri->gambar) }}" alt="{{$galeri->gambar}}"
                            class="img-fluid sigmapad">
                    </a>
                </div>
                @endforeach
            </div>

    </section>
    <div id="imageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="previousImage">
                        <span><i class="bi bi-chevron-left"></i></span>
                    </button>
                    <button type="button" class="btn btn-primary" id="nextImage">
                        <span><i class="bi bi-chevron-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>



    </div>
    </section>

    <!-- end shop section -->

    <!-- gift section -->

    <section class="gift_section layout_padding-bottom">
        <div class="box ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="img_container">
                            <div class="img-box">
                                <img src="{{asset ('image/wk.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Berikan Ucapan <br> Untuk Orang Tersayang
                                </h2>
                            </div>
                            <p>
                                Berikan ucapan kepada orang tersayang dengan papan bunga istimewa kami. Sentuhan indah
                                dari bunga segar untuk menyampaikan rasa sayang dan kebahagiaan. Pesan sekarang untuk
                                momen yang tak terlupakan. Ungkapkan perasaan dengan keindahan bunga dari kami!
                            </p>
                            <div class="btn-box">
                                <a href="{{ route('user.produk') }}" class="btn1">
                                    Pesan Sekarang
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end gift section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container center-content">
            <div class="heading_container heading_center">
                <h2>
                    Kenapa Memilih Malaya Florist
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box ">
                        <div class="img-box">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                 V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                 c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                 c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                 c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                 c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                 s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                 c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                 h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                 s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                 c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                 c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                 c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                  M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                 l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                 c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                 s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                 c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                 c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                 c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                 c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                 C281.901,181.576,281.901,176.501,278.771,173.37z" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Pengantaran cepat
                            </h5>
                            <p>
                                menyediakan layanan pengantaran aman dan tepat waktu
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box ">
                        <div class="img-box">
                            <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512"
                                xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                                <g id="filled">
                                    <path
                                        d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                                    <path
                                        d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                                    <path
                                        d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                                </g>
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>
                                Kualitas terjamin
                            </h5>
                            <p>
                                Berbagai variasi papan bunga indah dan berkualitas
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->


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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="" />

    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script>
    var currentImageIndex = 0; // Indeks gambar saat ini

    $('#imageModal').on('show.bs.modal', function(event) {
        var link = $(event.relatedTarget); // Link yang diklik
        var modal = $(this);
        var images = $('a[data-toggle="modal"]'); // Semua link gambar

        // Temukan indeks gambar yang di-klik
        currentImageIndex = images.index(link);

        // Tampilkan gambar yang sesuai dalam modal
        modal.find('.modal-title').text(link.data('title'));
        modal.find('.modal-body #modalImage').attr('src', link.data('image'));
    });

    $('#nextImage').click(function() {
        currentImageIndex = (currentImageIndex + 1) % $('a[data-toggle="modal"]').length;
        var nextImageLink = $('a[data-toggle="modal"]')[currentImageIndex];
        $('#imageModal .modal-title').text($(nextImageLink).data('title'));
        $('#imageModal #modalImage').attr('src', $(nextImageLink).data('image'));
    });

    $('#previousImage').click(function() {
        currentImageIndex = (currentImageIndex - 1 + $('a[data-toggle="modal"]').length) % $(
            'a[data-toggle="modal"]').length;
        var prevImageLink = $('a[data-toggle="modal"]')[currentImageIndex];
        $('#imageModal .modal-title').text($(prevImageLink).data('title'));
        $('#imageModal #modalImage').attr('src', $(prevImageLink).data('image'));
    });
    </script>


</body>


</html>