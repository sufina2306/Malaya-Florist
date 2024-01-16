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
        .col-sm-6 {
            box-sizing: border-box;
            width: 50%;
            padding: 10px;
        }

        .box {
            position: relative;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
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

        h6 {
            margin: 0;
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* jika ingin posisi vertikal juga menjadi tengah */
        }

        .navbar-fixed-top {
            position: fixed;
            width: 100%;
            z-index: 1000;
            /* Atur z-index agar navbar tampil di atas modal */
        }

        body.modal-open .navbar-fixed-top {
            padding-right: 0 !important;
            /* Atur padding agar tidak bergeser saat modal muncul */
        }

        .modal-open .navbar-collapse {
            display: none !important;
            /* Sembunyikan menu navbar saat modal muncul */
        }
    </style>

</head>

<body>
    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal Menambahkan</strong> {{Session::get('failed') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Menambahkan</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
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
        <h1>Detail Produk</h1>
        <div class="card p-5 m-5">
            <div class="row ">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{ asset('images/' . $produk->gambar) }}" class="ml-5" alt="" style=" max-width: 400px; height: auto;">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Kode Produk: {{ $produk->kode_produk }}</h2>
                    <p>Kategori: {{ $produk->kategori }}</p>
                    <p>Harga: Rp: {{ $produk->harga }}</p>
                    <p>Deskripsi : {{ $produk->deskripsi }}</p>
                    <button class="btn btn-primary btn-sm tombol-pesan p-2" style="background-color: #db4566;" data-bs-toggle="modal" data-bs-target="#orderModal" data-nama-produk="{{ $produk->kode_produk }}" data-harga-produk="{{ $produk->harga }}" data-deskripsi-produk="{{ $produk->deskripsi }}">
                        Pesan Sekarang
                    </button>

                </div>
            </div>
        </div>


        <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- Header Modal -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Pesan Sekarang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Isi Modal (Formulir Pesanan) -->
                    <form action="{{ route('postPemesanan') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <h6>Kode Produk: <span id="productName"></span></h6>
                            <h6>Size Ucapan</h6>
                            <label>
                                <input type="radio" name="papan" value="1" data-harga="{{ $produk->harga }}" required>
                                1 Papan
                            </label>
                           <label>
        <input type="radio" name="papan" value="2" data-harga="{{ intval($produk->harga) * 2 }}" required>
        2 Papan
    </label>
                            <!-- Formulir pesanan -->
                            <div class="mb-3">
                                <label for="ucapan" class="form-label">
                                    <h6>Ucapan</h6>
                                </label>
                                <textarea class="form-control" name="ucapan" id="ucapan" rows="3" placeholder="Ketikkan Ucapan..." required></textarea>
                                <span class="text-danger">
                                    @error('tanggalPeminjaman')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mb-3">
                                <label for="namapengirim" class="form-label">
                                    <h6>Atas Nama</h6>
                                </label>
                                <input type="text" name="atasnama" class="form-control" id="namapengirim" placeholder="Masukkan Nama " required>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">
                                    <h6>
                                        Alamat
                                    </h6>
                                </label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Contoh: Jalan Contoh No. 123" required>
                            </div>
                            <input type="hidden" name="kodeProduk" value="{{$produk->kode_produk}}" required>
                            <input type="hidden" name="iduser" value=" {{ Auth::user()->id }}" required>
                            <input type="hidden" name="hargaproduk" id="hargaProdukInput" value="" required>
                            <h6 class="mt-3 mb-3">Total Harga: Rp:<span id="totalHarga">0</span></h6>
                            <button type="submit" class="btn btn-success" id="whatsappButton">Pesan</button>
                        </div>
                    </form>
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
    <script>
        function hitungTotal() {
            let jumlah = document.getElementById('jumlah').value;
            let harga = document.getElementById('harga').value;

            let total = parseInt(jumlah) * parseInt(harga);
            document.getElementById('total_harga').innerText = total;
        }

        const tombolPesan = document.querySelectorAll('.tombol-pesan');
        const productNameField = document.getElementById('productName');
        const productPriceField = document.getElementById('productPrice');
        const productDescriptionField = document.getElementById('productDescription');
        const whatsappButton = document.getElementById('whatsappButton');
        const radioButtons = document.querySelectorAll('input[name="papan"]');
        const totalHarga = document.getElementById('totalHarga');

        tombolPesan.forEach(tombol => {
            tombol.addEventListener('click', function() {
                const namaProduk = this.getAttribute('data-nama-produk');
                const hargaProduk = this.getAttribute('data-harga-produk');
                const deskripsiProduk = this.getAttribute('data-deskripsi-produk');

                // Memasukkan informasi produk ke dalam modal
                productNameField.textContent = namaProduk;
                productPriceField.textContent = hargaProduk;
                productDescriptionField.textContent = deskripsiProduk;
            });
        });
        radioButtons.forEach(button => {
            button.addEventListener('change', function() {
                const harga = parseFloat(this.getAttribute('data-harga'));
                // Update total harga ketika radio button dipilih
                if (this.checked) {
                    totalHarga.textContent = harga;
                    hargaProdukInput.value = harga;
                }
            });
        });
        whatsappButton.addEventListener('click', function() {
            const productName = productNameField.textContent;
            const productPrice = totalHarga.textContent;
            const productDescription = productDescriptionField.textContent;
            const address = encodeURIComponent(document.getElementById('alamat').value);
            const additionalMessage = encodeURIComponent(document.getElementById('ucapan')
                .value);

            const message = encodeURIComponent(
                `Saya ingin membeli papan bunga: ${productName}. \nHarga: ${productPrice}. \n${productDescription}. \nAlamat: ${address}. \nUcapan: ${additionalMessage}`
            );
            const phoneNumber =
                '6282299758781'; // Pastikan nomor telepon ini sesuai dengan nomor tujuan WhatsApp Anda
            // Membuka jendela WhatsApp dengan URL yang sudah diformat
            window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
        });


        const jumlahPapanInput = document.getElementById('jumlahPapan');


        radioButtons.forEach(button => {
            button.addEventListener('change', function() {
                const harga = parseFloat(this.getAttribute('data-harga'));
                const jumlahPapan = parseInt(jumlahPapanInput.value);
                // Update total harga berdasarkan jumlah papan yang dipilih
                const total = harga * jumlahPapan;
                totalHarga.textContent = total;
                document.getElementById('hargaProdukInput').value =
                    total; // Update nilai input harga produk
            });
        });

        // Tambahan event listener untuk input jumlah papan
        jumlahPapanInput.addEventListener('input', function() {
            const selectedRadio = document.querySelector('input[name="papan"]:checked');
            if (selectedRadio) {
                const harga = parseFloat(selectedRadio.getAttribute('data-harga'));
                const jumlahPapan = parseInt(jumlahPapanInput.value);
                // Hitung total harga saat jumlah papan berubah
                const total = harga * jumlahPapan;
                totalHarga.textContent = total;
                document.getElementById('hargaProdukInput').value = total; // Update nilai input harga produk
            }
        });
    </script>

</body>

</html>