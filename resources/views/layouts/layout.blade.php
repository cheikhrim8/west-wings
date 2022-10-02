<!DOCTYPE html>
<html lang="{{\Illuminate\Support\Facades\App::getLocale()}}">

<head>
    <meta charset="utf-8">
    <title>{{$siteName}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="ww/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="ww/css/style.css" rel="stylesheet">
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{asset('css/rtl-styles.css')}}">
        <style>
            /*
 * Droid Arabic Kufi (Arabic) http://www.google.com/fonts/earlyaccess
 */
            @font-face {
                font-family: 'Droid Arabic Kufi';
                font-style: normal;
                font-weight: 400;
                src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.eot);
                src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.eot?#iefix) format('embedded-opentype'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.woff2) format('woff2'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.woff) format('woff'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Regular.ttf) format('truetype');
            }

            @font-face {
                font-family: 'Droid Arabic Kufi';
                font-style: normal;
                font-weight: 700;
                src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Bold.eot);
                src: url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Bold.eot?#iefix) format('embedded-opentype'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Bold.woff2) format('woff2'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Bold.woff) format('woff'),
                url(//fonts.gstatic.com/ea/droidarabickufi/v6/DroidKufi-Bold.ttf) format('truetype');
            }

            *:not(i) {
                font-family: 'Droid Arabic Kufi', sans-serif !important;
            }
        </style>

    @endif
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>{{$phone}}</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>{{$email}}</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="{{route('lang', 'fr')}}">
                    <img width="20" src="{{asset('icon/Flag_of_France.svg.png')}}" alt=""> <strong>FR</strong>
                </a>
                <a class="text-white px-2" href="{{route('lang', 'ar')}}">
                    <img width="20" src="{{ asset('icon/Flag_of_Saudi_Arabia.svg.webp') }}" alt=""> <strong>AR</strong>
                </a>
                <a class="text-white px-2" href="{{route('lang', 'en')}}">
                    <img width="20" src="{{ asset('icon/64px-Flag_of_the_United_States.svg.png') }}" alt=""> <strong>EN</strong>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0" dir="{{ \Illuminate\Support\Facades\App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top  py-lg-0 px-lg-5">
        <a href="{{route('wwm.index')}}" class="navbar-brand ml-lg-3">
            <img src="{{asset('images/wwm_logo.png')}}" width="200" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{route('wwm.index')}}" class="nav-item nav-link active">{{__('text.home')}}</a>
                <a href="#about" class="nav-item nav-link">{{__('text.about')}}</a>
                <a href="#service" class="nav-item nav-link">{{__('text.services')}}</a>
                <a href="#contact" class="nav-item nav-link">{{__('text.contact')}}</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->


@yield('content')

<!-- Footer Start -->
@include('layouts._footer', [
    'siteName' => $siteName,
])
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="ww/lib/easing/easing.min.js"></script>
<script src="ww/lib/waypoints/waypoints.min.js"></script>
<script src="ww/lib/counterup/counterup.min.js"></script>
<script src="ww/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="ww/mail/jqBootstrapValidation.min.js"></script>
<script src="ww/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="ww/js/main.js"></script>
</body>

</html>
