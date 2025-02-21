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
                <div class="header__navigation">

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
                        <source srcset="{{ asset('images/background_home-large.webp') }}" media="(max-width: 767px)"
                            type="image/webp">

                        <img src="{{ asset('images/background_home-large.webp') }}" alt="Capsule Background">
                    </picture>
                </div>

                <!---home desc and car--->
                <div class="home__desc__car">
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

                            <button id="lear_more_button">
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

                                <img src="{{ asset('images/capsule_car.webp') }}" alt="Capsule Background">
                            </picture>
                        </div>
                        <div class="home__car__desc">

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
