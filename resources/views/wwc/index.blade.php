@extends('layouts.layout' ,[
    'siteName' => 'WWM',
    'phone' => '+222 46323252',
    'email' => 'wwm@ww.mr'
])
@section('content')
    <div class="">
        <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
            <div class="overlay"></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                <li data-target="#carousel-example-caption" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="slider-img" src="https://blog.ecabrella.com/hubfs/Shipping-Gold-Tips.jpg" alt="">
                    <div class="carousel-caption">
                        <h3>First Slide Label</h3>
                        <p>Donut jujubes I love topping I love sweet. Jujubes I love brownie gummi bears I love donut
                            sweet
                            chocolate. Tart chocolate marshmallow.Tart carrot cake muffin.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img"
                         src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                         alt="Second slide">
                    <div class="carousel-caption">
                        <h3>Second Slide Label</h3>
                        <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes
                            chocolate cake
                            gummies. Cupcake cake I love cake danish carrot cake.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="slider-img"
                         src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                         alt="Third slide">
                    <div class="carousel-caption">
                        <h3>Third Slide Label</h3>
                        <p>Pudding sweet pie gummies. Chocolate bar sweet tiramisu cheesecake chocolate cotton candy
                            pastry muffin.
                            Marshmallow cake powder icing.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <!-- Header End -->
    <!-- About Start -->
    <div dir="{{App::isLocale('ar') ? 'rtl' : 'ltr'}}" id="about" class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100"
                         src="https://www.transportadvancement.com/wp-content/uploads/airways/15678/Turkish-Cargo-1000x570.jpg"
                         alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">{{__("text.3+ ans d'expérience")}}</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">{{__("text.À propos de nous")}}</h6>
                    <h1 class="mb-4">{{__("text.Fournisseur de services logistiques de confiance et plus rapide")}}</h1>
                    <p class="mb-4">{{__("text.WWM est un prestataire de services pour les compagnies aériennes desservant
                        Nouakchott, qui permet d’offrir les services suivants:")}}</p>
                    <ul class="list-inline">
                        <li><h6>
                                <i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Importation et Exportation des marchandises")}}
                            </h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Transit")}}</h6></li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Livraison bagages")}}</h6>
                        </li>
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Transfert d’équipage")}}
                            </h6></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div id="service" class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">{{__('text.Nos Services')}}</h6>
                <h1 class="mb-4">{{__('text.Meilleurs services logistiques')}}</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">{{__('text.Fret aérien')}}</h6>
                    </div>
                    <p>{{__('text.Un service de fret aérien rapide et efficace, contactez sans hésitation des professionnels
                        expérimentés.')}}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">{{__('text.Transfert d’équipage')}}</h6>
                    </div>
                    <p>{{__('text.Transferts des équipages, avec un niveau de sécurité maximal. Chaque client est un partenaire
                        précieux.')}}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">{{__('text.Import / export')}} </h6>
                    </div>
                    <p>{{__('text.Nous somme un partenaire capable de gérer vos expéditions aériennes et gérer vos formalités
                       douanières.')}}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">{{__('text.Livraison')}}</h6>
                    </div>
                    <p>{{__('text.Nous effectuons des livraisons de bagages, en tout sécurité, rapidité et professionnalisme.')}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div id="features" class="container-fluid bg-secondary py-5 my-5" dir="{{App::isLocale('ar') ? 'rtl' : 'ltr'}}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col text-center">
                    <h6 class="text-primary text-uppercase font-weight-bold">{{__("text.POURQUOI NOUS")}}</h6>
                    <h1 class="mb-4">{{__("text.LES PRINCIPALES CARACTÉRISTIQUES")}}</h1>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="https://www.jet8myanmar.com/images/iStock.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">

                    <ul class="list-inline">
                        <li><h5>
                                <i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.100% de clients satisfaits")}}
                            </h5>
                            <p class="ml-5">{{__("text.Un partenaire capable de gérer vos expéditions aériennes en toute sécurité
                                et gérer vos formalités douanières.")}}</p>
                        <li><h5>
                                <i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Service de qualité et prix abordable")}}
                            </h5></li>
                        <p class="ml-5">{{__("text.Avec un service personnalisé sur tous les envois grâce à des accords
                            préférentiels avec les compagnies aériennes.")}}</p>
                        <li><h5>
                                <i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Expérience et confiance")}}
                            </h5></li>
                        <p class="ml-5">{{__("text.Fort d’expérience dans le secteur du fret aérien, située à Nouakchott (Aeroport
                            Oumtounsy).")}}</p>
                        <li><h5><i class="far fa-dot-circle text-primary mr-3"></i>{{__("text.Solutions logistiques")}}
                            </h5></li>
                        <p class="ml-5">{{__("text.Nous proposons aux Exportateurs et Importateurs des solutions logistiques, un
                            service personnalisé sur tous les envois grâce à des accords préférentiels avec les
                            compagnies aériennes.")}}</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">{{__("text.Notre équipe")}}</h6>
                <h1 class="mb-4">{{__("text.Rencontrez notre équipe")}}</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="ww/img/team-1.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">{{__("text.Nom Complet")}}</h5>
                                <span>{{__("text.Fonction")}}</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="ww/img/team-2.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">{{__("text.Nom Complet")}}</h5>
                                <span>{{__("text.Fonction")}}</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="ww/img/team-3.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">{{__("text.Nom Complet")}}</h5>
                                <span>{{__("text.Fonction")}}</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="ww/img/team-4.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">{{__("text.Nom Complet")}}</h5>
                                <span>{{__("text.Fonction")}}</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">{{__("text.TÉMOIGNAGE")}}</h6>
                <h1 class="mb-4">{{__("text.Nos clients disent")}}</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="ww/img/testimonial-1.jpg"
                             style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">{{__("text.Nom du client")}}</h6>
                            <small>- {{__("text.Profession")}}</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="ww/img/testimonial-2.jpg"
                             style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">{{__("text.Nom du client")}}</h6>
                            <small>- {{__("text.Profession")}}</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="ww/img/testimonial-3.jpg"
                             style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">{{__("text.Nom du client")}}</h6>
                            <small>- {{__("text.Profession")}}</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
                <div class="position-relative bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text-primary position-absolute" style="top: -6px; right: 0;"></i>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-circle" src="ww/img/testimonial-4.jpg"
                             style="width: 60px; height: 60px;" alt="">
                        <div class="ml-3">
                            <h6 class="font-weight-semi-bold m-0">{{__("text.Nom du client")}}</h6>
                            <small>- {{__("text.Profession")}}</small>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr clita lorem. Dolor
                        ipsum sanct clita</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 bg-secondary" id="contact" dir="{{App::isLocale('ar') ? 'rtl' : 'ltr'}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <div class="bg-primary text-center text-white p-4">
                        <h4 class="m-0"><i class="fa fa-map-marker-alt text-white mx-2"></i>Oul Daddah Street,
                            Nouakchott, Mauritanie
                        </h4>
                    </div>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=صيدلية الحياة&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            <a href="https://mcpenation.com/">https://mcpenation.com</a></div>
                        <style>.mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_iframe {
                                width: 100% !important;
                                height: 400px !important;
                            }</style>
                    </div>
                </div>
                <div id="contact" class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">{{__("text.Contactez nous")}}</h6>
                    <h1 class="mb-4">{{__("text.Contact pour toute question")}}</h1>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name"
                                       placeholder="{{__("text.Your Name")}}"
                                       required="required"
                                       data-validation-required-message="{{__("text.Please enter your name")}}"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email"
                                       placeholder="{{__("text.Your Email")}}"
                                       required="required"
                                       data-validation-required-message="{{__("text.Please enter your email")}}"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject"
                                       placeholder="{{__("text.Subject")}}"
                                       required="required" data-validation-required-message="Please enter a subject"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="message"
                                          placeholder="{{__("text.Message")}}"
                                          required="required"
                                          data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-4" type="submit"
                                        id="sendMessageButton">{{__("text.Send Message")}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

<style>
    .slider-img {
        width: 100%;
        height: 75vh !important;
        object-fit: cover;
        position: relative;
    }

    .slider-img img::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        margin-bottom: 7rem !important;
    }

    .carousel-caption h3 {
        font-size: 50px;
        font-weight: 700;
        color: white;
    }
</style>
