<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ========================= Stylesheet =========================  --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login/style.css') }}">

    {{-- ========================= Icon =========================  --}}
    <link rel="icon" href="{{ asset('') }}">

    <title>Login</title>
</head>

<body>

    {{-- Glassmorphism --}}
    <div class="container my-5">
        <div class="card">
            <div class="row">
                <div class="col-lg-6" id="gambar-login">
                    <div class="container mx-auto me-2" style="margin-top: 130px; margin-bottom: 120px;">
                        @include('svg.login-image')
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="/proses" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container mx-auto me-2" style="margin-top: 170px; margin-bottom: 175px;">
                            <h5 class="text-center mb-4">Silahkan Masukkan Username Dan Password</h5>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Masukkan Username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">
                                    <b>Masuk</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>

    {{-- ========================= JavaScript =========================  --}}
    <script src="{{ asset('bootstrap/js/script.js') }}"></script>

</body>
</html>
