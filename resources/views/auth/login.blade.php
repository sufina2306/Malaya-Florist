<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/css/logincss.css') }}" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>MALAYA FLORIST</title>
</head>

<body style="font-family: 'Poppins', sans-serif;">

    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div class="container-fluid custom-container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card my-5">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- New div for image -->
                                <img src="{{asset('image/A(4).jpeg')}}" alt="Image"
                                    style="max-width: 100%; height: auto;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-center fw-bold">MASUK</h4>
                                            <a href="{{ route('auth.register') }}" class="nav-link text-center"><span
                                                    style="font-size: 12px;">Belum
                                                    punya akun ?</span><span style="font-size: 12px; color: #db4566">
                                                    Daftar</span></a>
                                        </div>
                                    </div>
                                    <br>
                                    <form action="{{ route('postLogin') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-secondary"><span
                                                    style="font-size: 12px;">Email</span></label>
                                            <input type="email" name="email" class="form-control"
                                                id="formGroupExampleInput"
                                                style="box-shadow: none; border-color: #3CACAE" required
                                                value="{{ old('email') }}">
                                            <span class="text-danger">
                                                @error('email')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-secondary"><span
                                                    style="font-size: 12px;">Kata Sandi</span></label>
                                            <input type="password" name="password" class="form-control"
                                                id="formGroupExampleInput"
                                                style="box-shadow: none; border-color: #3CACAE">
                                        </div>
                                        <br>
                                        <div class="mb-3 d-grid gap-2">
                                            <button type="submit" class="btn" style="background-color: #db4566"><span
                                                    style="color: white">Masuk</span></button>
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

    <br>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>