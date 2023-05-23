<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>EN2RE - Registration</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->

<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/site.webmanifest">
<link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Global CSS Files -->
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/login.css" rel="stylesheet">
<link href="assets/_start/simple.css" rel="stylesheet" type="text/css" />

<!-- =======================================================-->
<style>
    body{
        background: rgb(6 44 70);
    }
    #registration_form{
        /*width: 33.33333%;*/
        background: #fff;
        padding: 30px;
        border-radius: 4px;
    }
    .alert-danger {
        background-color: #fbe1e3;
        border-color: #fbe1e3;
        color: #e73d4a;
        border-radius: 5px;
        padding: 10px;
    }
</style>

<div class="container" style="margin-top:50px;">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            
        </div>
        <div class="col-md-6" id="registration_form">
            <div class="card">
                <div class="card-header">
                 <div class="col-md-12 mb-3  justify-content-center " style="text-align: center;margin-bottom: 20px;">
                    <img src="{{asset('assets/img/EN2RE_LOGO.png')}}" width="200" alt="">
                </div>
            </div>


            <div class="card-body">
                <form method="POST" action="{{ route('user.register') }}">
                    @csrf
                    
                    <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>


                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <div class="alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>


                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <div class="alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <div class="alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>




