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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

        <style>
            .bd {
                font-family: Arial, sans-serif;
                padding: 20px;
                max-width: 400px;
                margin: 0 auto;
            }

            .container-struk {
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 8px;
                background-color: #f9f9f9;
            }

            .header {
                text-align: center;
                margin-bottom: 20px;
            }

            .bank-name {
                font-size: 20px;
                font-weight: bold;
            }

            .logo {
                display: block;
                margin: 0 auto;
                width: 80px;
                height: auto;
            }

            .transaction-detail {
                margin-bottom: 10px;
            }

            .transaction-detail span {
                display: block;
                margin-bottom: 5px;
            }

            .amount {
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                margin-top: 15px;
            }

            .footer {
                text-align: center;
                margin-top: 20px;
            }

            .text-center {
                text-align: center;
            }

            .text-center button {
                display: block;
                margin: 0 auto;
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
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('user.produk') }}">Produk</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('user.galeri') }}">Galeri</a>
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
                </nav>
            </header>
            <!-- end header section -->

        </div>

        <!-- end hero area -->
        <div class="container  ">

            <div class="container-struk bd mb-5 mt-5">
                <div class="header">
                    <h4>Struk Pembayaran</h4>
                    <p>Malaya Florist</p>

                </div>
                <div class="detail">
                    <span>Tanggal Pemesanan:</span>
                   <span>{{ isset($pembayaran) ? explode(' ', $pembayaran->created_at)[0] : '' }}</span>

                </div>
                <div class="detail">
                    <span>Kode Transaksi:</span>
                    <span>{{ isset($pembayaran) ? $pembayaran->id : '' }}</span>
                </div>
                <div class="detail">
                    <span>Kode Produk:</span>
                    <span>{{ isset($pembayaran) ? $pembayaran->kode_produk : '' }}</span>
                </div>
                <div class="detail">
                    <span>Total Pembayaran:</span>
                    <span>{{ isset($pembayaran) ? $pembayaran->harga : '' }}</span>
                </div>
                <div class="footer">
                    <span>Lakukan pembayaran ke WhatsApp</span>
                </div>
                <div class="text-center">

                    <button class="btn btn-success" id="whatsappButton">Bayar Sekarang</button>
                </div>
            </div>
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
        <script>
            // Ambil nomor transaksi atau kode yang akan dijadikan barcode
            const kodeTransaksi = "TRX123456";

            // Panggil JsBarcode untuk membuat barcode
            JsBarcode("#barcode", kodeTransaksi, {
                format: "CODE128",
                displayValue: false
            });
        </script>
        @if(isset($pembayaran) && !empty($pembayaran))
        @if(
        !empty($pembayaran->created_at) &&
        !empty($pembayaran->id) &&
        !empty($pembayaran->kode_produk) &&
        !empty($pembayaran->harga)
        )
        <script>
            const pembayaran = {
                 created_at: '{{ explode(' ', $pembayaran->created_at)[0] }}',
                id: '{{ $pembayaran->id }}',
                Kode_produk: '{{ $pembayaran->kode_produk }}',
                harga: '{{ $pembayaran->harga }}'
            };

            document.getElementById('whatsappButton').addEventListener('click', function() {
                const message = `
                    Pemesanan Papan Bunga:\n

                    Tanggal: ${pembayaran.created_at}\n
                    Kode Transaksi: ${pembayaran.id}\n
                    Kode Produk: ${pembayaran.Kode_produk}\n
                    Total Pembayaran: ${pembayaran.harga}\n
                `;

                const encodedMessage = encodeURI(message);
                window.open(`https://wa.me/6282268753093?text=${encodedMessage}`, '_blank');
            });
        </script>
        @endif
        @endif



    </body>





    </html>