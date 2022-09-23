@extends('layouts.app')
@section('content')
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#"/></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a class="active" href="index.html">Home</a>
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
                                    <a href="index.html">
                                        {{--                                        <img src="images/logo.png" alt="#" />--}}
                                        <h1>WW logo</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-9">
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
                                            <h1>WELCOME<br> <span class="white">WEST WINGS</span></h1>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters,</p>
                                            <a class="read_more conatct_btn" href="#contact" role="button">Contact
                                                now</a>
                                            <a class="read_more conatct_btn" href="#about" role="button">About WEST
                                                WINGS</a>
                                        </div>
                                    </div>
                                </div>
                                <strong>best</strong>
                            </div>
                        </div>
                    </div>
                    {{--<div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption banner_po">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="build_box text_align_left">
                                            <h1>WELCOME<br> <span class="white">METALS FACTORY</span></h1>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                            <a class="read_more conatct_btn" href="#contact" role="button">Contact now</a>
                                            <a class="read_more conatct_btn" href="#about" role="button">About Factory</a>
                                        </div>
                                    </div>
                                </div>
                                <strong>best</strong>
                            </div>
                        </div>
                    </div>--}}
                    {{--<div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption banner_po">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="build_box text_align_left">
                                            <h1>WELCOME<br> <span class="white">METALS FACTORY</span></h1>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                                            <a class="read_more conatct_btn" href="#contact" role="button">Contact now</a>
                                            <a class="read_more conatct_btn" href="#about" role="button">About Factory</a>
                                        </div>
                                    </div>
                                </div>
                                <strong>best</strong>
                            </div>
                        </div>
                    </div>--}}
                </div>
                {{--<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>--}}
            </div>
        </section>
    </header>
    <!-- end banner -->
    <!-- about -->
    <div id="about" class="about">
        <div class="frame">
            <div class="plane-container">
                <a href="http://customer.io/" target="_blank">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="1131.53px" height="379.304px" viewBox="0 0 1131.53 379.304"
                         enable-background="new 0 0 1131.53 379.304" xml:space="preserve" class="plane">
        <polygon fill="#D8D8D8"
                 points="72.008,0 274.113,140.173 274.113,301.804 390.796,221.102 601.682,367.302 1131.53,0.223  "/><polygon fill="#C4C4C3" points="1131.53,0.223 274.113,140.173 274.113,301.804 390.796,221.102   "/></svg></a>
            </div>
        </div>
        <div class="bg_about">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-md-4" id="wwm">
                        <div class="about_img">
                            <a href="#">
                                <figure>
                                    <img src="images/wwm.jpg" alt="#"/>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4" id="wwc">
                        <a href="#">
                            <div class="about_img">
                                <figure><img src="images/wwc.jpg" alt="#"/></figure>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" id="wwn">
                        <div class="about_img">
                            <a href="#">
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
                            <h2>Contact Us</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <form id="request" class="main_form">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <input class="contactus" placeholder="Name" type="type" name=" Name">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Email" type="type" name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Phone Number" type="type"
                                                   name="Phone Number">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="send_btn">Send</button>
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
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Locations
                            </li>
                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +222 22002200</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> contact@ww.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <ul class="social_icon">
                            <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-linkedin-square"
                                                                aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <p>Copyright {{ now()->year }} All Right Reserved By <a href="https://ww.com"> West wings</a></p>
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

