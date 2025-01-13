@extends('layouts.app')

@section('title', 'Capsule - car proection')

@section('content')

    <div class="main__container">
        <!---header-->
        <header class="header" id="header">
            <div class="header__wrapper">

                <a href="{{ url(app()->getLocale()) }}">
                    <img src="{{ asset('public/images/logo_main.png') }}" alt="">
                </a>


                <div class="header__navigation">
                    <div class="header__nav__burger">
                        <img src="{{ asset('public/images/circum_menu-burger.png') }}" alt="" srcset="">
                    </div>
                    <div class="header__nav__element">
                        <button data-target="home">{{ __('main.header_home') }}</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="about_us">{{ __('main.header_about') }}</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="warranty">{{ __('main.header_warranty') }}</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="catalog">{{ __('main.header_catalogue') }}</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="gallery">{{ __('main.header_gallery') }}</button>
                    </div>

                    <div class="header__nav__element">
                        <button data-target="contact">{{ __('main.header_contacts') }}</button>
                    </div>
                    <img src="{{ asset('public/images/header_rectangle.png') }}" id="header_rectangle"
                        class="header_rectangle" alt="" />
                </div>


                <div class="header__languages">
                    <button id="languageButton">{{ strtoupper(app()->getLocale()) }}</button>
                    <div class="language-dropdown" id="languageDropdown">
                        <a href="{{ url('/en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                        <a href="{{ url('/de') }}" class="{{ app()->getLocale() === 'de' ? 'active' : '' }}">DE</a>
                    </div>
                </div>


                <div class="header__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>


            <!-- Full-screen mobile menu -->
            <div class="mobile-menu" id="mobileMenu">
                <button class="mobile-menu__close" id="mobileMenuClose">X</button>
                <div class="mobile-menu__content">
                    <div class="mobile__menu__container">
                        <div class="mobile__burger-logo">
                            <img src="{{ asset('public/images/logo_main.png') }}" alt="">
                        </div>
                        <div class="mobile__burger-language">
                            <a href="{{ url('/en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                            <a href="{{ url('/de') }}" class="{{ app()->getLocale() === 'de' ? 'active' : '' }}">DE</a>
                        </div>
                        <div class="mobile__burger-navigation">
                            <a href="#home">{{ __('main.header_home') }}</a>
                            <a href="#about_us">{{ __('main.header_about') }}</a>
                            <a href="#warranty">{{ __('main.header_warranty') }}</a>
                            <a href="#catalog">{{ __('main.header_catalogue') }}</a>
                            <a href="#gallery">{{ __('main.header_gallery') }}</a>
                            <a href="#contact">{{ __('main.header_contacts') }}</a>
                        </div>
                        <div class="mobile__burger__created">

                        </div>
                    </div>

                    <div class="mobile__menu__placeholder">
                        <img src="{{ asset('public/images/about_placeholder1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </header>

        <!---main home section---->
        <section class="main" id="home">
            <!----text and car--->
            <div class="main__wrapper">
                <!---- Name desc button ---->
                <div class="main__info">
                    <div class="main__name">
                        <h1>{{ __('main.title_line_1') }}</h1>
                        <h1>{{ __('main.title_line_2') }}</h1>
                    </div>

                    <div class="main__desc">
                        {{ __('main.title_main_text') }}
                    </div>
                    <div class="main__buttons">
                        <button>{{ __('main.title_main_contact') }}</button>

                        <button>{{ __('main.title_main_learn') }}</button>
                    </div>
                </div>

                <!---car and description---->
                <div class="main__car">

                    <img class="main__car__main__img" src="{{ asset('public/images/car_main.png') }}" alt="Car info image"
                        srcset="">
                    <div class="main__car__dot main__car__dot1">
                        <div class="main__car__dot-white"></div>
                    </div>
                    <div class="main__car__dot main__car__dot2">
                        <div class="main__car__dot-white"></div>
                    </div>
                    <div class="main__car__dot main__car__dot3">
                        <div class="main__car__dot-white"></div>
                    </div>
                    <div class="main__car__dot main__car__dot4">
                        <div class="main__car__dot-white"></div>
                    </div>
                    <div class="main__car__dot main__car__dot5">
                        <div class="main__car__dot-white"></div>
                    </div>



                    <div class="car-vector car-vector1">
                        <img src="{{ asset('public/images/car-vector1.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector2">
                        <img src="{{ asset('public/images/car-vector2.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector3">
                        <img src="{{ asset('public/images/car-vector3.png') }}" alt="" srcset="">
                    </div>

                    <div class="car-vector car-vector4">
                        <img src="{{ asset('public/images/car-vector4.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector5">
                        <img src="{{ asset('public/images/car-vector5.png') }}" alt="" srcset="">
                    </div>


                    <div class="car-desc car-desc1">
                        Premium quality
                    </div>
                    <div class="car-desc car-desc2">
                        High hydrophobicity
                    </div>
                    <div class="car-desc car-desc3">
                        100% Self-healing
                    </div>
                    <div class="car-desc car-desc4">
                        Anti-yellow
                        warranty
                    </div>
                    <div class="car-desc car-desc5">
                        Excellent carrosion
                        resistance
                    </div>

                </div>
            </div>

            <!---main background--->
            <div class="main__background">
                <img src="{{ asset('public/images/background.png') }}" alt="Car Image">
            </div>
        </section>

        <!---AMERICAN QUALITY--->
        <section class="american" id="american">
            <div class="american__name">
                {{ __('main.american__name') }}
            </div>
            <div class="american__wrapper">
                <div class="american__text__block">
                    <img src="{{ asset('public/images/German_quality.png') }}" alt="">
                </div>
                <div class="american__car__block">
                    <img src="{{ asset('public/images/quality_car.png') }}" alt="">
                </div>
            </div>
        </section>

        <!---About us section---->
        <section class="about_us" id="about_us">
            <div class="about_us__container">
                <div class="about_us__name">
                    {{ __('main.about_us__name') }}
                </div>
                <div class="about_us__desc">
                    <div class="about_us__desc-text">
                        <p>
                            {{ __('main.about_us__desc-text1') }}
                        </p>
                        <p>
                            {{ __('main.about_us__desc-text2') }}
                        </p>

                        <p>
                            {{ __('main.about_us__desc-text3') }}
                        </p>
                    </div>
                    <div class="about_us__desc-back">

                    </div>
                </div>


                <div class="about_us__wrapper">
                    <div class="about_us__image">
                        <div class="about_us__image-car">
                            <img src="{{ asset('public/images/aboutcar.png') }}" alt="" srcset="">
                        </div>

                        <!--placeholders--->
                        <img class="about_us__image-placeholder1"
                            src="{{ asset('public/images/about_placeholder1.png') }}" alt="" srcset="">
                    </div>

                    <div class="about_us__content">
                        <div class="about_us__content__name">
                            Dedicated to providing
                            Unparalleled quality
                        </div>
                        <div class="about_us__content__desc">
                            <p>
                                {{ __('main.about_us__content__desc1') }}
                            </p>

                            <p>
                                {{ __('main.about_us__content__desc2') }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!---warranty and verification--->

        <section class="warranty" id="warranty">
            <div class="warranty__name__desc">
                <p>Dual Digital Shield is an advanced protection system integrated into our products to ensure their authenticity and security, including an electronic warranty. This innovative technology features two levels of digital verification:</p>
            </div>
            <div class="warranty__container">
                <div class="warranty__element">
                    <div class="warranty__element__wrapper">
                        <div class="warranty__element__image">
                            <div class="warranty__element__image-block">

                            </div>
                            <div class="warranty__element__image-link">
                                <a target="_blank" href="{{ route('verification') }}">Verification check</a>
                            </div>
                        </div>
                        <div class="warranty__element__desc">
                            <p>
                                {{ __('main.warranty__element__verification') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="warranty__name">
                    <p>dual digital shield</p>
                </div>
                <div class="warranty__element2">
                    <div class="warranty__element__wrapper2">
                        <div class="warranty__element__image2">
                            <div class="warranty__element__image-block2">

                            </div>
                            <div class="warranty__element__image-link2">
                                <a target="_blank" href="{{ route('warranty') }}">warranty check</a>
                            </div>
                        </div>
                        <div class="warranty__element__desc2">
                            <p>Our Digital Warranty System safeguards your investment in paint protection films and your
                                consumer rights. Each product comes with a unique digital warranty certificate that verifies
                                its authenticity and quality. The warranty is activated via an SMS notification from
                                Capsule, ensuring protection against fraud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--- Catalogue --->
        <section class="catalog" id="catalog">

            <div class="ctalog__placeholder">
                <img src="{{ asset('public/images/catalog_placeholder.png') }}" alt="" srcset="">
            </div>

            <div class="catalog__wrapper">
                <div class="catalog__name">
                    <p>Catalogue</p>
                </div>

                <div class="catalog__swiper">
                    <div class="catalog__swiper-button">
                        <a href="{{ url('/catalog') }}">
                            VIEW ALL items
                        </a>
                    </div>


                    <div class="catalog__swiper__wrapper">
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ 'public/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                URBAN
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Designed for cars used daily in urban conditions.</p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ 'public/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ELEMENT
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Crafted for premium-class vehicles, providing perfect protection and
                                                    style.</p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ 'public/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                HURACAN
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Built for sports cars and extreme usage, delivering maximum protection.
                                                </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ 'public/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                MATTE
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Matte protection for vehicles, offering a stylish look and reliable
                                                    coverage.</p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ 'public/images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                BLACK
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Created for changing the car's color and ensuring its protection.</p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <img src="{{ asset('public/images/arrow_catalog.png') }}" alt=""
                                        srcset="">
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <img src="{{ asset('public/images/arrow_catalog.png') }}" alt=""
                                        srcset="">
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>



        <!------Gallery---->
        <section class="gallery" id="gallery">
            <div class="gallery__car__placeholder">
                <img src="{{ asset('public/images/gallery_car.png') }}" alt="" srcset="">
            </div>
            <div class="gallery__wrapper">
                <div class="gallery__name">
                    <div class="gallery__name-text">
                        Gallery
                    </div>
                </div>

                <div class="gallery__images__wrapper">
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/1.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/1.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/2.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/2.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__big">
                        <a href="{{ asset('public/images/3.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/3.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/4.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/4.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/5.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/5.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small gallery__images__medium">
                        <a href="{{ asset('public/images/6.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/6.png') }}" alt="Gallery Image" />
                        </a>

                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/7.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/7.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/8.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/8.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                </div>

                <div class="gallery__images__wrapper">
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/9.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/9.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/10.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/10.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__big">
                        <a href="{{ asset('public/images/11.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/11.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/12.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/12.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/13.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/13.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small gallery__images__medium">
                        <a href="{{ asset('public/images/14.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/14.png') }}" alt="Gallery Image" />
                        </a>

                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('public/images/1.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/1.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('public/images/2.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('public/images/2.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!----MAP---->
        <section class="map">
            <div class="map__wrapper">
                <div class="map__name-container">
                    <div class="map__name">
                        <h4>global distribution</h4>
                        <p>We are trusted by car owners all over the world</p>
                    </div>
                </div>


                <div class="map__container">
                    <div class="map__container-map">
                        <img src="{{ 'public/images/map.png' }}" alt="" srcset="">

                    </div>

                    <div class="map__container-desc">
                        <p>15</p>
                        <span>countries</span>
                        <p class="map_margin">150+</p>
                        <span>dealers</span>
                    </div>
                </div>


            </div>
        </section>

        <!---COntact US----->
        <section class="contact" id="contact">
            <div class="contact_wrapper">
                <div class="contact_wrapper__animation">
                    <div class="contact__text__block">
                        <img src="{{ asset('public/images/contact_us.png') }}" alt="">
                    </div>
                    <div class="contact__car__block">
                        <img src="{{ asset('public/images/contact_car.png') }}" alt="">
                    </div>
                </div>

                <div class="contact__main__container">
                    <div class="contact__form__container">
                        <form action="#">
                            <div class="contact__form__name-message">
                                <div class="contact__form__block name">
                                    <div class="contact__form__block-name">
                                        Name
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="text" name="name" id="name" placeholder="Your name">
                                    </div>
                                </div>

                                <div class="contact__form__block message">
                                    <div class="contact__form__block-name">
                                        How can we help you?
                                    </div>
                                    <div class="contact__form__block-input">
                                        <textarea placeholder="Leave your message" name="" id=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__form__number-country">
                                <div class="contact__form__block number">
                                    <div class="contact__form__block-name">
                                        Number
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="number" name="number" id="number"
                                            placeholder="Your mobile number">
                                    </div>
                                </div>

                                <div class="contact__form__block country">
                                    <div class="contact__form__block-name">
                                        Country
                                    </div>
                                    <div class="contact__form__block-input">

                                        <select class="contact__form__block-select" id="countries">
                                            <option value="TT" data-capital="Kabul">Select Counry</option>
                                            <option value="AF" data-capital="Kabul">Afghanistan</option>
                                            <option value="AX" data-capital="Mariehamn">Aland Islands</option>
                                            <option value="AL" data-capital="Tirana">Albania</option>
                                            <option value="DZ" data-capital="Algiers">Algeria</option>
                                            <option value="AS" data-capital="Pago Pago">American Samoa</option>
                                            <option value="AD" data-capital="Andorra la Vella">Andorra</option>
                                            <option value="AO" data-capital="Luanda">Angola</option>
                                            <option value="AI" data-capital="The Valley">Anguilla</option>
                                            <option value="AG" data-capital="St. John's">Antigua and Barbuda</option>
                                            <option value="AR" data-capital="Buenos Aires">Argentina</option>
                                            <option value="AM" data-capital="Yerevan">Armenia</option>
                                            <option value="AW" data-capital="Oranjestad">Aruba</option>
                                            <option value="AU" data-capital="Canberra">Australia</option>
                                            <option value="AT" data-capital="Vienna">Austria</option>
                                            <option value="AZ" data-capital="Baku">Azerbaijan</option>
                                            <option value="BS" data-capital="Nassau">Bahamas</option>
                                            <option value="BH" data-capital="Manama">Bahrain</option>
                                            <option value="BD" data-capital="Dhaka">Bangladesh</option>
                                            <option value="BB" data-capital="Bridgetown">Barbados</option>
                                            <option value="BY" data-capital="Minsk">Belarus</option>
                                            <option value="BE" data-capital="Brussels">Belgium</option>
                                            <option value="BZ" data-capital="Belmopan">Belize</option>
                                            <option value="BJ" data-capital="Porto-Novo">Benin</option>
                                            <option value="BM" data-capital="Hamilton">Bermuda</option>
                                            <option value="BT" data-capital="Thimphu">Bhutan</option>
                                            <option value="BO" data-capital="Sucre">Bolivia</option>
                                            <option value="BA" data-capital="Sarajevo">Bosnia and Herzegovina</option>
                                            <option value="BW" data-capital="Gaborone">Botswana</option>
                                            <option value="BR" data-capital="Brasília">Brazil</option>
                                            <option value="IO" data-capital="Diego Garcia">British Indian Ocean
                                                Territory</option>
                                            <option value="BN" data-capital="Bandar Seri Begawan">Brunei Darussalam
                                            </option>
                                            <option value="BG" data-capital="Sofia">Bulgaria</option>
                                            <option value="BF" data-capital="Ouagadougou">Burkina Faso</option>
                                            <option value="BI" data-capital="Bujumbura">Burundi</option>
                                            <option value="CV" data-capital="Praia">Cabo Verde</option>
                                            <option value="KH" data-capital="Phnom Penh">Cambodia</option>
                                            <option value="CM" data-capital="Yaoundé">Cameroon</option>
                                            <option value="CA" data-capital="Ottawa">Canada</option>
                                            <option value="KY" data-capital="George Town">Cayman Islands</option>
                                            <option value="CF" data-capital="Bangui">Central African Republic</option>
                                            <option value="TD" data-capital="N'Djamena">Chad</option>
                                            <option value="CL" data-capital="Santiago">Chile</option>
                                            <option value="CN" data-capital="Beijing">China</option>
                                            <option value="CX" data-capital="Flying Fish Cove">Christmas Island
                                            </option>
                                            <option value="CC" data-capital="West Island">Cocos (Keeling) Islands
                                            </option>
                                            <option value="CO" data-capital="Bogotá">Colombia</option>
                                            <option value="KM" data-capital="Moroni">Comoros</option>
                                            <option value="CK" data-capital="Avarua">Cook Islands</option>
                                            <option value="CR" data-capital="San José">Costa Rica</option>
                                            <option value="HR" data-capital="Zagreb">Croatia</option>
                                            <option value="CU" data-capital="Havana">Cuba</option>
                                            <option value="CW" data-capital="Willemstad">Curaçao</option>
                                            <option value="CY" data-capital="Nicosia">Cyprus</option>
                                            <option value="CZ" data-capital="Prague">Czech Republic</option>
                                            <option value="CI" data-capital="Yamoussoukro">Côte d'Ivoire</option>
                                            <option value="CD" data-capital="Kinshasa">Democratic Republic of the
                                                Congo</option>
                                            <option value="DK" data-capital="Copenhagen">Denmark</option>
                                            <option value="DJ" data-capital="Djibouti">Djibouti</option>
                                            <option value="DM" data-capital="Roseau">Dominica</option>
                                            <option value="DO" data-capital="Santo Domingo">Dominican Republic
                                            </option>
                                            <option value="EC" data-capital="Quito">Ecuador</option>
                                            <option value="EG" data-capital="Cairo">Egypt</option>
                                            <option value="SV" data-capital="San Salvador">El Salvador</option>
                                            <option value="GQ" data-capital="Malabo">Equatorial Guinea</option>
                                            <option value="ER" data-capital="Asmara">Eritrea</option>
                                            <option value="EE" data-capital="Tallinn">Estonia</option>
                                            <option value="ET" data-capital="Addis Ababa">Ethiopia</option>
                                            <option value="FK" data-capital="Stanley">Falkland Islands</option>
                                            <option value="FO" data-capital="Tórshavn">Faroe Islands</option>
                                            <option value="FM" data-capital="Palikir">Federated States of Micronesia
                                            </option>
                                            <option value="FJ" data-capital="Suva">Fiji</option>
                                            <option value="FI" data-capital="Helsinki">Finland</option>
                                            <option value="MK" data-capital="Skopje">Former Yugoslav Republic of
                                                Macedonia</option>
                                            <option value="FR" data-capital="Paris">France</option>
                                            <option value="PF" data-capital="Papeete">French Polynesia</option>
                                            <option value="GA" data-capital="Libreville">Gabon</option>
                                            <option value="GM" data-capital="Banjul">Gambia</option>
                                            <option value="GE" data-capital="Tbilisi">Georgia</option>
                                            <option value="DE" data-capital="Berlin">Germany</option>
                                            <option value="GH" data-capital="Accra">Ghana</option>
                                            <option value="GI" data-capital="Gibraltar">Gibraltar</option>
                                            <option value="GR" data-capital="Athens">Greece</option>
                                            <option value="GL" data-capital="Nuuk">Greenland</option>
                                            <option value="GD" data-capital="St. George's">Grenada</option>
                                            <option value="GU" data-capital="Hagåtña">Guam</option>
                                            <option value="GT" data-capital="Guatemala City">Guatemala</option>
                                            <option value="GG" data-capital="Saint Peter Port">Guernsey</option>
                                            <option value="GN" data-capital="Conakry">Guinea</option>
                                            <option value="GW" data-capital="Bissau">Guinea-Bissau</option>
                                            <option value="GY" data-capital="Georgetown">Guyana</option>
                                            <option value="HT" data-capital="Port-au-Prince">Haiti</option>
                                            <option value="VA" data-capital="Vatican City">Holy See</option>
                                            <option value="HN" data-capital="Tegucigalpa">Honduras</option>
                                            <option value="HK" data-capital="Hong Kong">Hong Kong</option>
                                            <option value="HU" data-capital="Budapest">Hungary</option>
                                            <option value="IS" data-capital="Reykjavik">Iceland</option>
                                            <option value="IN" data-capital="New Delhi">India</option>
                                            <option value="ID" data-capital="Jakarta">Indonesia</option>
                                            <option value="IR" data-capital="Tehran">Iran</option>
                                            <option value="IQ" data-capital="Baghdad">Iraq</option>
                                            <option value="IE" data-capital="Dublin">Ireland</option>
                                            <option value="IM" data-capital="Douglas">Isle of Man</option>
                                            <option value="IL" data-capital="Jerusalem">Israel</option>
                                            <option value="IT" data-capital="Rome">Italy</option>
                                            <option value="JM" data-capital="Kingston">Jamaica</option>
                                            <option value="JP" data-capital="Tokyo">Japan</option>
                                            <option value="JE" data-capital="Saint Helier">Jersey</option>
                                            <option value="JO" data-capital="Amman">Jordan</option>
                                            <option value="KZ" data-capital="Astana">Kazakhstan</option>
                                            <option value="KE" data-capital="Nairobi">Kenya</option>
                                            <option value="KI" data-capital="South Tarawa">Kiribati</option>
                                            <option value="KW" data-capital="Kuwait City">Kuwait</option>
                                            <option value="KG" data-capital="Bishkek">Kyrgyzstan</option>
                                            <option value="LA" data-capital="Vientiane">Laos</option>
                                            <option value="LV" data-capital="Riga">Latvia</option>
                                            <option value="LB" data-capital="Beirut">Lebanon</option>
                                            <option value="LS" data-capital="Maseru">Lesotho</option>
                                            <option value="LR" data-capital="Monrovia">Liberia</option>
                                            <option value="LY" data-capital="Tripoli">Libya</option>
                                            <option value="LI" data-capital="Vaduz">Liechtenstein</option>
                                            <option value="LT" data-capital="Vilnius">Lithuania</option>
                                            <option value="LU" data-capital="Luxembourg City">Luxembourg</option>
                                            <option value="MO" data-capital="Macau">Macau</option>
                                            <option value="MG" data-capital="Antananarivo">Madagascar</option>
                                            <option value="MW" data-capital="Lilongwe">Malawi</option>
                                            <option value="MY" data-capital="Kuala Lumpur">Malaysia</option>
                                            <option value="MV" data-capital="Malé">Maldives</option>
                                            <option value="ML" data-capital="Bamako">Mali</option>
                                            <option value="MT" data-capital="Valletta">Malta</option>
                                            <option value="MH" data-capital="Majuro">Marshall Islands</option>
                                            <option value="MQ" data-capital="Fort-de-France">Martinique</option>
                                            <option value="MR" data-capital="Nouakchott">Mauritania</option>
                                            <option value="MU" data-capital="Port Louis">Mauritius</option>
                                            <option value="MX" data-capital="Mexico City">Mexico</option>
                                            <option value="MD" data-capital="Chișinău">Moldova</option>
                                            <option value="MC" data-capital="Monaco">Monaco</option>
                                            <option value="MN" data-capital="Ulaanbaatar">Mongolia</option>
                                            <option value="ME" data-capital="Podgorica">Montenegro</option>
                                            <option value="MS" data-capital="Little Bay, Brades, Plymouth">Montserrat
                                            </option>
                                            <option value="MA" data-capital="Rabat">Morocco</option>
                                            <option value="MZ" data-capital="Maputo">Mozambique</option>
                                            <option value="MM" data-capital="Naypyidaw">Myanmar</option>
                                            <option value="NA" data-capital="Windhoek">Namibia</option>
                                            <option value="NR" data-capital="Yaren District">Nauru</option>
                                            <option value="NP" data-capital="Kathmandu">Nepal</option>
                                            <option value="NL" data-capital="Amsterdam">Netherlands</option>
                                            <option value="NZ" data-capital="Wellington">New Zealand</option>
                                            <option value="NI" data-capital="Managua">Nicaragua</option>
                                            <option value="NE" data-capital="Niamey">Niger</option>
                                            <option value="NG" data-capital="Abuja">Nigeria</option>
                                            <option value="NU" data-capital="Alofi">Niue</option>
                                            <option value="NF" data-capital="Kingston">Norfolk Island</option>
                                            <option value="KP" data-capital="Pyongyang">North Korea</option>
                                            <option value="MP" data-capital="Capitol Hill">Northern Mariana Islands
                                            </option>
                                            <option value="NO" data-capital="Oslo">Norway</option>
                                            <option value="OM" data-capital="Muscat">Oman</option>
                                            <option value="PK" data-capital="Islamabad">Pakistan</option>
                                            <option value="PW" data-capital="Ngerulmud">Palau</option>
                                            <option value="PA" data-capital="Panama City">Panama</option>
                                            <option value="PG" data-capital="Port Moresby">Papua New Guinea</option>
                                            <option value="PY" data-capital="Asunción">Paraguay</option>
                                            <option value="PE" data-capital="Lima">Peru</option>
                                            <option value="PH" data-capital="Manila">Philippines</option>
                                            <option value="PN" data-capital="Adamstown">Pitcairn</option>
                                            <option value="PL" data-capital="Warsaw">Poland</option>
                                            <option value="PT" data-capital="Lisbon">Portugal</option>
                                            <option value="PR" data-capital="San Juan">Puerto Rico</option>
                                            <option value="QA" data-capital="Doha">Qatar</option>
                                            <option value="CG" data-capital="Brazzaville">Republic of the Congo
                                            </option>
                                            <option value="RO" data-capital="Bucharest">Romania</option>
                                            <option value="RU" data-capital="Moscow">Russia</option>
                                            <option value="RW" data-capital="Kigali">Rwanda</option>
                                            <option value="BL" data-capital="Gustavia">Saint Barthélemy</option>
                                            <option value="KN" data-capital="Basseterre">Saint Kitts and Nevis
                                            </option>
                                            <option value="LC" data-capital="Castries">Saint Lucia</option>
                                            <option value="VC" data-capital="Kingstown">Saint Vincent and the
                                                Grenadines</option>
                                            <option value="WS" data-capital="Apia">Samoa</option>
                                            <option value="SM" data-capital="San Marino">San Marino</option>
                                            <option value="ST" data-capital="São Tomé">Sao Tome and Principe</option>
                                            <option value="SA" data-capital="Riyadh">Saudi Arabia</option>
                                            <option value="SN" data-capital="Dakar">Senegal</option>
                                            <option value="RS" data-capital="Belgrade">Serbia</option>
                                            <option value="SC" data-capital="Victoria">Seychelles</option>
                                            <option value="SL" data-capital="Freetown">Sierra Leone</option>
                                            <option value="SG" data-capital="Singapore">Singapore</option>
                                            <option value="SX" data-capital="Philipsburg">Sint Maarten</option>
                                            <option value="SK" data-capital="Bratislava">Slovakia</option>
                                            <option value="SI" data-capital="Ljubljana">Slovenia</option>
                                            <option value="SB" data-capital="Honiara">Solomon Islands</option>
                                            <option value="SO" data-capital="Mogadishu">Somalia</option>
                                            <option value="ZA" data-capital="Pretoria">South Africa</option>
                                            <option value="KR" data-capital="Seoul">South Korea</option>
                                            <option value="SS" data-capital="Juba">South Sudan</option>
                                            <option value="ES" data-capital="Madrid">Spain</option>
                                            <option value="LK" data-capital="Sri Jayawardenepura Kotte, Colombo">Sri
                                                Lanka</option>
                                            <option value="PS" data-capital="Ramallah">State of Palestine</option>
                                            <option value="SD" data-capital="Khartoum">Sudan</option>
                                            <option value="SR" data-capital="Paramaribo">Suriname</option>
                                            <option value="SZ" data-capital="Lobamba, Mbabane">Swaziland</option>
                                            <option value="SE" data-capital="Stockholm">Sweden</option>
                                            <option value="CH" data-capital="Bern">Switzerland</option>
                                            <option value="SY" data-capital="Damascus">Syrian Arab Republic</option>
                                            <option value="TW" data-capital="Taipei">Taiwan</option>
                                            <option value="TJ" data-capital="Dushanbe">Tajikistan</option>
                                            <option value="TZ" data-capital="Dodoma">Tanzania</option>
                                            <option value="TH" data-capital="Bangkok">Thailand</option>
                                            <option value="TL" data-capital="Dili">Timor-Leste</option>
                                            <option value="TG" data-capital="Lomé">Togo</option>
                                            <option value="TK" data-capital="Nukunonu, Atafu,Tokelau">Tokelau</option>
                                            <option value="TO" data-capital="Nukuʻalofa">Tonga</option>
                                            <option value="TT" data-capital="Port of Spain">Trinidad and Tobago
                                            </option>
                                            <option value="TN" data-capital="Tunis">Tunisia</option>
                                            <option value="TR" data-capital="Ankara">Turkey</option>
                                            <option value="TM" data-capital="Ashgabat">Turkmenistan</option>
                                            <option value="TC" data-capital="Cockburn Town">Turks and Caicos Islands
                                            </option>
                                            <option value="TV" data-capital="Funafuti">Tuvalu</option>
                                            <option value="UG" data-capital="Kampala">Uganda</option>
                                            <option value="UA" data-capital="Kiev">Ukraine</option>
                                            <option value="AE" data-capital="Abu Dhabi">United Arab Emirates</option>
                                            <option value="GB" data-capital="London">United Kingdom</option>
                                            <option value="US" data-capital="Washington, D.C.">United States of
                                                America</option>
                                            <option value="UY" data-capital="Montevideo">Uruguay</option>
                                            <option value="UZ" data-capital="Tashkent">Uzbekistan</option>
                                            <option value="VU" data-capital="Port Vila">Vanuatu</option>
                                            <option value="VE" data-capital="Caracas">Venezuela</option>
                                            <option value="VN" data-capital="Hanoi">Vietnam</option>
                                            <option value="VG" data-capital="Road Town">Virgin Islands (British)
                                            </option>
                                            <option value="VI" data-capital="Charlotte Amalie">Virgin Islands (U.S.)
                                            </option>
                                            <option value="EH" data-capital="Laayoune">Western Sahara</option>
                                            <option value="YE" data-capital="Sana'a">Yemen</option>
                                            <option value="ZM" data-capital="Lusaka">Zambia</option>
                                            <option value="ZW" data-capital="Harare">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__form__email-contact">
                                <div class="contact__form__block email">
                                    <div class="contact__form__block-name">
                                        E-mail
                                    </div>
                                    <div class="contact__form__block-input">
                                        <input type="email" name="email" id="email"
                                            placeholder="Your mobile number">
                                    </div>
                                </div>

                                <div class="contact__form__block method">
                                    <div class="contact__form__block-name">
                                        How can we contact you?
                                    </div>
                                    <div class="contact__form__block-input">
                                        <div class="radio-group">
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="email" />
                                                <span class="radio-label">E-Mail</span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="phone" />
                                                <span class="radio-label">Phone</span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="contact-method" value="both" />
                                                <span class="radio-label">Both</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="contact__from-terms">
                                <div class="checkbox-wrapper">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="consent" />
                                        <span class="checkbox-label"></span>
                                    </label>
                                    <span class="checkbox-text">
                                        I give my consent to the processing of personal data in accordance with the <a
                                            href="#">Terms*</a>
                                    </span>
                                </div>

                            </div>



                            <div class="contact__form-submit">
                                <button type="submit">
                                    SEND REQUEST
                                </button>
                            </div>
                        </form>
                        <div class="contact__form__container-blur"></div>
                        <div class="contact__form__container-bg"></div>
                    </div>

                    <div class="contact__map__logo">
                        <div class="contact__map-logo">
                            <img src="{{ 'public/images/logo_main.png' }}" alt="" srcset="">
                        </div>

                        <div class="contact__map-map">


                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3104.5949588474564!2d-77.0222031!3d38.91037680000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2saz!4v1735153252338!5m2!1sru!2saz"
                                width="100%" height="100%" style="border: none;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="contact__adress__block">
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Address:
                            </div>
                            <div class="contact__adress__content">
                                1550 7th st NW, Washington, apt 819, District of Columbia, 20001
                            </div>
                        </div>
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Phone:
                            </div>
                            <div class="contact__adress__content">
                                +12137067456
                            </div>
                        </div>
                        <div class="contact__adress__element">
                            <div class="contact__adress__name">
                                Email:
                            </div>
                            <div class="contact__adress__content">
                                contact@capsule.com
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer__copyright">
                    <p>Copyright {{ date('Y') }} &copy;</p>
                </div>


            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const glide = new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                perView: 4,
                focusAt: 'center',
                gap: 40,
                autoplay: 10000,

                animationDuration: 800,
                breakpoints: {
                    1024: {
                        perView: 2
                    },
                    600: {
                        perView: 1.5
                    }
                }
            });

            glide.on('move', () => {
                const slides = document.querySelectorAll('.glide__slide');
                slides.forEach(slide => slide.classList.remove('is-next'));
                const nextIndex = (glide.index + 1) % slides.length;
                slides[nextIndex].classList.add('is-next');
            });

            glide.mount();
        });


        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.header__burger');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuClose = document.getElementById('mobileMenuClose');
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
            const body = document.body;

            // Open mobile menu
            burger.addEventListener('click', () => {
                mobileMenu.classList.add('active');
                body.style.overflow = 'hidden'; // Disable scrolling
            });

            // Close mobile menu on close button click
            mobileMenuClose.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                body.style.overflow = ''; // Enable scrolling
            });

            // Close mobile menu on link click
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = ''; // Enable scrolling
                });
            });
        });
    </script>
    <script src="{{ asset('public/js/main.js') }}"></script>


@endsection
