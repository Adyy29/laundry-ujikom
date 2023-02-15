<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ========================= Stylesheet =========================  --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css1/login/style.css') }}">

    {{-- ========================= Icon =========================  --}}
    <link rel="icon" href="{{ asset('') }}">

    <title>Login</title>
</head>
<body>

    {{-- Glassmorphism --}}
    <div class="pewarna"></div>
    <div class="container mt-5 border" id="login">
        <div class="row">
            <div class="col-md-6" id="login-card">
                <div class="isi-kiri">
                  <img src="{{ asset('img/laundry.png') }}" alt="" width="">
                <p class="judul">Silahkan Masukan Username dan Password</p>
                {{-- Form Login --}}
                <form>
                    <!-- Email input -->
                    <div class=" 22mb-4">
                      <input type="text" placeholder="Username" id="form2Example1" class="form-control" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" placeholder="Password" id="form2Example2" class="form-control" />
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                        <button type="button" id="masuk" class="btn btn-primary btn-block mb-4">Sign in</button></div>
                </div>
            </form>
            </div>
            <div class="col-md-6">
              <img src="{{ asset('img/login-kanan.png') }}" alt="" width="">
               </div> 
            </div>
        </div>
    </div>

    {{-- ========================= JavaScript =========================  --}}
    <script src="{{ asset('bootstrap/js/script.js') }}"></script>

</body>
</html>
