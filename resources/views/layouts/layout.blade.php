<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="ww/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="ww/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top py-3 py-lg-0 px-lg-5">
        <a href="{{route('wwm.index')}}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-plane mr-2"></i>WWM</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{route('wwm.index')}}" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->


@yield('content')

<!-- Testimonial Start -->
{{--<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center pb-2">
            <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
            <h1 class="mb-4">Our Clients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
            <div class="position-relative bg-secondary p-4">
                <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                <div class="d-flex align-items-center mb-3">
                    <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" alt="">
                    <div class="ml-3">
                        <h6 class="font-weight-semi-bold m-0">Client Name</h6>
                        <small>- Profession</small>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor ipsum sanct clita</p>
            </div>
        </div>
    </div>
</div>--}}
<!-- Testimonial End -->

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
