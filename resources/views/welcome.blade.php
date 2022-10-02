@extends('layouts.app')
@section('content')
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="">Home</a>
        <a href="#wwm">WW Mauritania</a>
        <a href="#wwc">WW Cameroon</a>
        <a href="#wwn">WW Nigeria</a>
    </div>
    <!-- header -->
    <header class="full_bg">
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class=" col-md-2 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img width="100" src="{{asset('images/wws.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-9">
                        <div class="d-inline-flex align-items-center text_align_right">
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
                        <ul class="site_menu text_align_right">
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
        <!-- end header -->
        <section class="banner_main">
            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption  banner_po">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="build_box text_align_left">
                                            <h1><span class="white">WEST WINGS ACS</span></h1>
                                            <p>{{__("text.est une societe dont l'objet est de fournir tous les services de fret aérien ainsi qu'être le représentant des compagnies aériennes au niveau Africain")}}</p>
                                            <a class="read_more conatct_btn" href="#contact" role="button">{{__("text.Contact now")}}</a>
                                        </div>
                                    </div>
                                </div>
                                <strong>best</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- end banner -->
    <!-- about -->
    <div id="about" class="about">
        <div class="bg_about">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-md-4">
                        <div class="about_img">
                            <a href="{{route('wwm.index')}}">
                                <figure>
                                    <img src="images/wwm.jpg" alt="#"/>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 my-2" id="wwc">
                        <a href="{{route('wwc.index')}}">
                            <div class="about_img">
                                <figure><img src="images/wwc.jpg" alt="#"/></figure>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" id="wwn">
                        <div class="about_img">
                            <a href="{{route('wwn.index')}}">
                                <figure><img src="images/wwn.jpg" alt="#"/></figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg_yeloow">
                        <div class="titlepage text_align_center">
                            <h2>{{__('text.Contactez nous')}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form id="request" class="main_form">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <input class="contactus" placeholder="{{__('text.Your Name')}}" type="type" name=" Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="{{__("text.Your Email")}}" type="type" name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="{{__("text.Phone Number")}}" type="type"
                                                   name="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="{{__('text.Message')}}" type="type"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="send_btn">{{__("text.Send Message")}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-10 offset-md-1">
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations</li>
                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +222 22002200</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> contact@ww-acs.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="social_icon">
                            <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>Copyright {{ now()->year }} All Right Reserved By
                                <a href="https://ww.com"> West wings</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
@endsection

<style>
    .light {
        width: 10px;
        height: 10px;
        background: red;
        border-radius: 50%;
        bottom: 295px;
        position: absolute;
        z-index: 10;
        left: 20px;
        animation: light 800ms ease-in-out 0s infinite alternate;
    }

    .cloud {
        position: absolute;
        top: 0;
        right: 100px;
        opacity: 1;
        animation: cloud 10s linear 0s infinite reverse;
        z-index: 99;
    }

    @keyframes light {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes cloud {
        from {
            right: 0px;
        }
        to {
            right: 100%;
        }
    }




/*    */
    .frame {
        width: 500px;
        height: auto;
        margin: 15% auto 0;
        position: absolute;
        width: 100%;
    }

    svg {
        max-width: 100%;
        height: auto;
        display: block;
    }

    /**
     * Paper Plane
     */
    /*Paper Plane: Container*/
    .plane-container {
        width: 200px;
        margin: 0px auto;
        z-index: 3;
    }
    /*Paper Plane: Image*/
    .plane {
        width: 100%;
        height: 60px;
    }

    /*Paper Plane: Animation*/
    .plane-container {
        -webkit-animation: paper-plane-scoping 2s alternate infinite;
        -moz-animation: paper-plane-scoping 2s alternate infinite;
        animation: paper-plane-scoping 2s alternate infinite;

        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        animation-timing-function: linear;
    }

    @-webkit-keyframes paper-plane-scoping {
        0% {
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            transform: translateY(0px);
        }
        100% {
            -webkit-transform: translateY(100px);
            -moz-transform: translateY(100px);
            transform: translateY(100px);
        }
    }

    .plane {
        -webkit-animation-timing-function: ease-in-out;
        -moz-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;

        -webkit-animation: paper-plane-soaring 4s forwards infinite;
        -moz-animation: paper-plane-soaring 4s forwards infinite;
        animation: paper-plane-soaring 4s forwards infinite;
    }
    @-webkit-keyframes paper-plane-soaring {
        0% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        40% {
            -webkit-transform: rotate(15deg);
            -moz-transform: rotate(15deg);
            transform: rotate(15deg);
        }
        50% {
            -webkit-transform: rotate(15deg);
            -moz-transform: rotate(15deg);
            transform: rotate(15deg);
        }
        60% {
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }
        70% {
            -webkit-transform: rotate(-10deg);
            -moz-transform: rotate(-10deg);
            transform: rotate(-10deg);
        }
        100% {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    /**
     * Clouds
     */
    .clouds {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        transform: translateZ(0);
    }

    .cloud {
        position: absolute;
        top: 20%;
        width: 300px;
        right: 0;
        opacity: 1;
    }

    .cloud.front {
        z-index: 9;
    }

    .cloud.distant {
        z-index: 1;
    }

    .cloud.background {
        z-index: 1;
    }

    /*Cloud Sizing*/
    .cloud.smaller {
        margin-right: 400px;
        width: 100px;
        margin-top: 50px;
    }

    .cloud.small {
        margin-right: 200px;
        width: 150px;
    }

    .cloud.big {
        width: 500px;
        margin-top: 50px;
        margin-right: 150px;
    }

    .cloud.massive {
        width: 600px;
        margin-top: 20px;
        margin-right: 0px;
    }


    /*Cloud: Animation*/
    .cloud {
        -webkit-animation-name: cloud-movement;
        -webkit-animation-timing-function: linear;
        -webkit-animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-duration: 8s;

        -moz-animation-name: cloud-movement;
        -moz-animation-timing-function: linear;
        -moz-animation-direction: forwards;
        -moz-animation-iteration-count: infinite;
        -moz-animation-duration: 8s;

        animation-name: cloud-movement;
        animation-timing-function: linear;
        animation-direction: forwards;
        animation-iteration-count: infinite;
        animation-duration: 8s;
    }

    .slow {
        -webkit-animation-duration: 9.2s;
        -moz-animation-duration: 9.2s;
        animation-duration: 9.2s;
    }

    .slower {
        -webkit-animation-duration: 11.2s;
        -moz-animation-duration: 11.2s;
        animation-duration: 11.2s;
    }

    .slowest {
        -webkit-animation-duration: 13.5s;
        -moz-animation-duration: 13.5s;
        animation-duration: 13.5s;
    }

    .super-slow {
        -webkit-animation-duration: 20.5s;
        -moz-animation-duration: 20.5s;
        animation-duration: 20.5s;
    }

    @-webkit-keyframes cloud-movement {
        0% {
            opacity: 0.1;
            -webkit-transform: translateX(300px);
            -moz-transform: translateX(300px);
            transform: translateX(300px);
        }
        10% {

            opacity: 0.7;
        }
        90% {
            opacity: 0;
        }
        100% {
            opacity: 0;
            -webkit-transform: translateX(-1000px);
            -moz-transform: translateX(-1000px);
            transform: translateX(-1000px);
        }
    }
</style>

