<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Qo'qon gullari - Paneli</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/logo.jfif">

    <!-- page css -->
    <link href="assets/vendors/apexcharts/dist/apexcharts.css" rel="stylesheet">

    <!-- Core css -->
    <link href="./assets/css/app.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth-full-height container d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card row mx-0 flex-row overflow-hidden">
                    <div class="col-md-4 bg-size-cover d-flex align-items-center p-4" style="background-image: url('assets/images/others/bg-2.jpg');">
                        <div>
                            <div class="mb-5">
                                <div class="logo">
                                    <h3 class="text-white">Qo'qon Gullari</h3>
                                </div>
                            </div>
                            <p class="text-white mt-4 mb-5 o-75">Дарим Эмоции 🌹</p>
                        </div>
                    </div>
                    <div class="col-md-8 px-0">
                        <div class="card-body">
                            <div class="my-5 mx-auto" style="max-width: 350px;">
                                <div class="mb-3">
                                    <h3>Tizimga kirish</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Foydalanuvchi nomi</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>Iltimos tekshirib qaytadan tering</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label d-flex justify-content-between">
                                            <span>Parol</span>
                                        </label>
                                        <div class="form-group input-affix flex-column">
                                            <label class="d-none">Password</label>
                                            <input formcontrolname="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            <i class="suffix-icon feather cursor-pointer text-dark icon-eye" ng-reflect-ng-class="icon-eye"></i>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                         <div class="col-md-12 offset-md-12 mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" class="{{ old('remember') ? 'checked' : '' }}">
                                    <label class="form-check-label" for="remember">
                                         {{ __('Eslab qolish') }}
                                    </label>
                                </div>
                            </div>
                                    </div>
                                    <a href="{{ route('register') }}" class="text-primary w-100">Akkountingiz yo'qmi? Ro'yxatdan o'ting</a>
                                    <button type="submit" class="btn mt-1 btn-primary w-100">Kirish</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>



</body>

</html>