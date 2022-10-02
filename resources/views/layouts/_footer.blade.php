<div id="footer" class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">
    <div class="row pt-5">
        <div class="col-lg-7 col-md-6">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h3 class="text-primary mb-4">{{__("text.Entrer en contact")}}</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Oul dada Street, Nouakchott, Mauritania</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+2226412525</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-primary mb-4">{{__("text.Quick Links")}}</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-{{ App::isLocale('ar') ? 'left' : 'right' }} mr-2"></i>{{__("text.home")}}</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-{{ App::isLocale('ar') ? 'left' : 'right' }} mr-2"></i>{{__("text.about")}}</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-{{ App::isLocale('ar') ? 'left' : 'right' }} mr-2"></i>{{__("text.services")}}</a>
                        <a class="text-white" href="#"><i class="fa fa-angle-{{ App::isLocale('ar') ? 'left' : 'right' }} mr-2"></i>{{__("text.Quick Links")}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-5">
            <h3 class="text-primary mb-4">{{__("text.Newsletter")}}</h3>
            <p></p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="{{__("text.Your Email")}}">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">{{__("text.Sign Up")}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
     style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">{{ $siteName }}</a>{{__("text.All Rights Reserved")}}</p>
        </div>
    </div>
</div>

@if(App::isLocale('ar'))
    <style>
        #footer:not(.fab){
            text-align: right;
        }
        #footer i:not(.fab){
            margin-left: 10px;
        }
    </style>
@endif
