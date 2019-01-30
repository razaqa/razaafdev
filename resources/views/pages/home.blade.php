@extends('base')

@section('title', config('app.name'))

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bungee+Inline|Indie+Flower|Major+Mono+Display|Monoton|Permanent+Marker|Staatliches" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <div id="cover" class="uk-inline img-cover-height uk-height-large uk-background-cover uk-overflow-hidden uk-flex uk-flex-center" uk-parallax="opacity: 1, 0;" style="background-image: url('img/HomeCover.jpg');">
            <div class="uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale; autoplay: true; autoplay-interval: 4000;">
                    <ul class="uk-slideshow-items">
                        <li>
                            <h1 class="white uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">creativity.</h1>
                        </li>
                        <li>
                            <h1 class="white uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">curiosity.</h1>
                        </li>
                        <li>
                            <h1 class="white uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">critical.</h1>
                        </li>
                        <li>
                            <h1 class="white uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">courage.</h1>
                        </li>
                    </ul>
                    <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a> -->
                </div>
            </div>
            <a class="uk-position-bottom-center slide-down uk-button uk-button-primary" href="#writings" uk-scroll>
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
        <div id="writings" class="uk-inline img-cover-height uk-height-large uk-background-cover uk-overflow-hidden uk-flex uk-flex-center" style="background-color:white;">
            <div class="uk-width-1-2@s uk-text-center uk-margin-auto uk-margin-auto-vertical headline">
                <div class="section-title">
                    <h1 class="section-title">NEW WRITINGS</h1>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; autoplay: true; autoplay-interval: 4000; center: true">
                    <ul class="uk-slider-items uk-grid">
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img src="https://picsum.photos/600/400?image=0" alt="">
                                <div class="writings-description uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-bottom uk-width-medium">
                                    <h3 class="">Left</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="uk-position-bottom uk-button uk-button-text uk-button-large" href="#">
                                        read more...
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img src="https://picsum.photos/600/400?image=1" alt="">
                                <div class="writings-description uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-bottom uk-width-medium">
                                    <h3 class="">Left</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="uk-position-bottom uk-button uk-button-text uk-button-large" href="#">
                                        read more...
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img src="https://picsum.photos/600/400?image=2" alt="">
                                <div class="writings-description uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-bottom uk-width-medium">
                                    <h3 class="">Left</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="uk-position-bottom uk-button uk-button-text uk-button-large" href="#">
                                        read more...
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img src="https://picsum.photos/600/400?image=3" alt="">
                                <div class="writings-description uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-bottom uk-width-medium">
                                    <h3 class="">Left</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="uk-position-bottom uk-button uk-button-text uk-button-large" href="#">
                                        read more...
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="uk-width-3-4">
                            <div class="uk-panel">
                                <img src="https://picsum.photos/600/400?image=4" alt="">
                                <div class="writings-description uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-bottom uk-width-medium">
                                    <h3 class="">Left</h3>
                                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a class="uk-position-bottom uk-button uk-button-text uk-button-large" href="#">
                                        read more...
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="slider-color uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="slider-color uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>
            </div>
            <a class="uk-position-bottom-center slide-down uk-button uk-button-primary" href="#projects" uk-scroll>
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>

    </div>
@endsection

@section('extra-js')
    <script type="application/javascript" src="{{ asset('js/pages/home.js') }}"></script>
@endsection
