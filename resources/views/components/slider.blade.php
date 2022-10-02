@props([
    'images'
])
<div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-caption" data-slide-to="1"></li>
        <li data-target="#carousel-example-caption" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($images as $image)
            <div class="carousel-item">
                <img src="{{ asset('app-assets/images/carousel/08.jpg') }}" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Second Slide Label</h3>
                    <p>Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake
                        gummies. Cupcake cake I love cake danish carrot cake.</p>
                </div>
            </div>
        @endforeach
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
