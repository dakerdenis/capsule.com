@extends('layouts.app')

@section('title', 'Welcome to Capsule')

@section('content')


    <div class="main__wrapper">
        <!----page's header--->
        <header class="header">
            <div class="header__wrapper">
                <!---HEADER LOGO---->
                <div class="header__logo">
                    <picture>
                        <source srcset="{{ asset('images/logo-large.webp') }}" media="(min-width: 768px)" type="image/webp">
                        <source srcset="{{ asset('images/logo-small.webp') }}" media="(max-width: 767px)" type="image/webp">

                        <img src="{{ asset('images/logo-large.webp') }}" alt="Capsule Logo" width="338" height="113">
                    </picture>
                </div>

                <!--HEADER navigation---->
                <div class="header__navigation remove-on-mobile">
                    asdasdas
                </div>

                <!---header language--->
                <div class="haeder__languge">

                </div>
            </div>
        </header>


        <!---section HOME--->
        <section class="main__section" id="home">
            <div class="home__wrapper">
                <!--home background-->
                <div class="home__background">
                    <picture>
                        <source srcset="{{ asset('images/background_home-large.webp') }}" media="(min-width: 768px)"
                            type="image/webp">
                        <source srcset="{{ asset('images/background_home-small.png') }}" media="(max-width: 767px)"
                            type="image/webp">

                        <img src="{{ asset('images/background_home-large.webp') }}" alt="Capsule Background">
                    </picture>
                </div>

                <!---home desc and car--->
                <div class="home__desc__car">
                    <!--home desc-->
                    <div class="home__desc">
                        <div class="home__desc__name">
                            <h1> High-End Paint <br> Protection Film</h1>
                        </div>

                        <div class="home__desc__text">
                            <p>Advanced production of protective films for automotive paint, ensuring unmatched quality and
                                reliability. A diverse range of clear and colored PPF films developed using the latest
                                nanotechnology research and innovative solutions.</p>
                        </div>

                        <div class="home__desc__button">
                            <button id="contact_button">
                                contact us now
                            </button>

                            <button class="remove-on-mobile" id="lear_more_button">
                                Learn more
                            </button>
                        </div>
                    </div>
                    <!----capsule__car--->
                    <div class="home__car">
                        <div class="home__car-image">
                            <picture>
                                <source srcset="{{ asset('images/capsule_car.webp') }}" media="(min-width: 768px)"
                                    type="image/webp">
                                <source srcset="{{ asset('images/capsule_car-mobile.webp') }}" media="(max-width: 767px)"
                                    type="image/webp">

                                <img src="{{ asset('images/capsule_car.webp') }}" alt="Protected Car">
                            </picture>
                        </div>
                        <!---circles and desc--->
                        <div class="home__car__desc">
                            <!---CIRCLE and DESC 1---->
                            <div class="car__circle  car__circle1 remove-on-mobile">
                                <div></div>
                            </div>
                            <div class="car__desc car__desc1">
                                <picture>
                                    <source srcset="{{ asset('images/car_desc/desc1.svg') }}" media="(min-width: 768px)"
                                        type="image/webp">
                                    <source srcset="{{ asset('images/car_desc/desc1mob.svg') }}" media="(max-width: 767px)"
                                        type="image/webp">
    
                                    <img src="{{ asset('images/car_desc/desc1.svg') }}" alt="Premium quality">
                                </picture>
                            </div>
                            <div class="car__p car__p1">
                                Premium quality
                            </div>
                            <!---CIRCLE and DESC 2---->
                            <div class="car__circle  car__circle2 remove-on-mobile">
                                <div></div>
                            </div>
                            <div class="car__desc car__desc2">
                                <picture>
                                    <source srcset="{{ asset('images/car_desc/desc2.svg') }}" media="(min-width: 768px)"
                                        type="image/webp">
                                    <source srcset="{{ asset('images/car_desc/desc2mob.svg') }}" media="(max-width: 767px)"
                                        type="image/webp">
    
                                    <img src="{{ asset('images/car_desc/desc2.svg') }}" alt="Premium quality">
                                </picture>
                            </div>
                            <div class="car__p car__p2">
                                High hydrophobicity
                            </div>

                            <!---CIRCLE and DESC 3---->
                            <div class="car__circle  car__circle3 remove-on-mobile">
                                <div></div>
                            </div>
                            <div class="car__desc car__desc3">
                                <picture>
                                    <source srcset="{{ asset('images/car_desc/desc3.svg') }}" media="(min-width: 768px)"
                                        type="image/webp">
                                    <source srcset="{{ asset('images/car_desc/desc3mob.svg') }}" media="(max-width: 767px)"
                                        type="image/webp">
    
                                    <img src="{{ asset('images/car_desc/desc3.svg') }}" alt="Premium quality">
                                </picture>
                            </div>
                            <div class="car__p car__p3">
                                100% Self-healing
                            </div>


                            <!---CIRCLE and DESC 4---->
                            <div class="car__circle  car__circle4 remove-on-mobile">
                                <div></div>
                            </div>
                            <div class="car__desc car__desc4">
                                <picture>
                                    <source srcset="{{ asset('images/car_desc/desc4.svg') }}" media="(min-width: 768px)"
                                        type="image/webp">
                                    <source srcset="{{ asset('images/car_desc/desc4mob.svg') }}" media="(max-width: 767px)"
                                        type="image/webp">
    
                                    <img src="{{ asset('images/car_desc/desc4.svg') }}" alt="Premium quality">
                                </picture>
                            </div>
                            <div class="car__p car__p4">
                                Anti-yellow warranty
                            </div>


                            <!---CIRCLE and DESC 5---->
                            <div class="car__circle  car__circle5 remove-on-mobile">
                                <div></div>
                            </div>
                            <div class="car__desc car__desc5">
                                <picture>
                                    <source srcset="{{ asset('images/car_desc/desc5.svg') }}" media="(min-width: 768px)"
                                        type="image/webp">
                                    <source srcset="{{ asset('images/car_desc/desc5mob.svg') }}" media="(max-width: 767px)"
                                        type="image/webp">
    
                                    <img src="{{ asset('images/car_desc/desc5.svg') }}" alt="Premium quality">
                                </picture>
                            </div>
                            <div class="car__p car__p5">
                                Excellent carrosion
 resistance
                            </div>


                            

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!---section ABOUT--->
        <section class="about__section" id="about">

        </section>


        <!---section map--->
        <section class="map__section" id="map">

        </section>

        <!---section Warranty--->
        <section class="warranty__section" id="warranty">

        </section>

        <!---section Catalog--->
        <section class="catalog__section" id="catalog">

        </section>

        <!---section Catalog--->
        <section class="gallery__section" id="gallery">

        </section>


        <!---section Catalog--->
        <section class="contact__section" id="contact">

        </section>
    </div>
@endsection
