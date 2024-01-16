<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/css/logincss.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MALAYA FLORIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            color: #3CACAE;
        }

        .btn {
            background-color: #3CACAE;
            color: white;
        }

        .btn-close {
            color: #000;
        }

        .text-secondary {
            color: #3CACAE;
        }

        .text-white {
            color: white;
        }

        .text-warning {
            color: #FFD700;
        }

        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Registrasi Gagal!</strong> {{Session::get('failed') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrasi Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    <div class="container custom-container" style="max-width: 600px;">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col">
                <div class="card my-5">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Updated div for image to make it full-width -->
                                <img src="{{asset('image/A(4).jpeg')}}" alt="Image" style="width: 100%; height: 600px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-center fw-bold">DAFTAR</h4>
                                            <a href="{{ route('auth.login') }}" class="nav-link text-center"><span style="font-size: 12px;">Sudah punya akun ?</span><span style="font-size: 12px; color: #db4566"> Masuk</span></a>
                                        </div>
                                    </div>
                                    <br>
                                    <form action="{{ route('postRegister') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama" class="form-label text-secondary"><span style="font-size: 12px;">Username</span></label>
                                            <input type="text" name="nama" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE" required value="{{ old('name') }}">
                                            <span class="text-danger">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class=" mb-3">
                                            <label for="Email" class="form-label text-secondary"><span style="font-size: 12px;">Email</span></label>
                                            <input type="email" name="email" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE" required value="{{ old('email') }}">
                                            <span class="text-danger">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telp" class="form-label text-secondary"><span style="font-size: 12px;">Nomor Hp</span></label>
                                            <input type="number" name="nohp" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label text-secondary"><span style="font-size: 12px;">Kata sandi</span></label>
                                            <input type="password" name="password" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE">
                                            <span class="text-danger">
                                                @error('password')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label text-secondary"><span style="font-size: 12px;">Konfirmasi Kata sandi</span></label>
                                            <input type="password" name="password_confirmation" class="form-control" required id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE">
                                            <span class="text-danger">
                                                @error('password_confirmation')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <br>
                                        <div class="mb-3 d-grid gap-2">
                                            <button type="submit" name="daftar" class="btn" style="background-color: #db4566"><span style="color: white">Daftar</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />

    <br>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>