@extends('layouts.app')

@section('title', 'Capsule - car proection')

@section('content')

    <div class="main__container">
        <!---header-->
        <header class="header" id="header">
            <div class="header__wrapper">
                <a href="#">
                    <img src="{{ asset('./images/logo_main.png') }}" alt="">
                </a>

                <div class="header__navigation">
                    <div class="header__nav__burger">
                        <img src="{{ asset('./images/circum_menu-burger.png') }}" alt="" srcset="">
                    </div>
                    <div class="header__nav__element">
                        <button data-target="home">Home</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="about_us">About</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="catalog">Catalogue</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="gallery">Gallery</button>
                    </div>
                    <div class="header__nav__element">
                        <button data-target="contact">Contacts</button>
                    </div>
                    <img src="{{ asset('./images/header_rectangle.png') }}" id="header_rectangle" class="header_rectangle"
                        alt="" />
                </div>


                <div class="header__languages">
                    <button>EN</button>
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
                        <h1>Premium class</h1>
                        <h1>Paint Protection Film.</h1>
                    </div>
                    <div class="main__desc">
                        Cutting-edge Paint Protection Film production delivering unmatched quality.
                        A forward-thinking catalog of clear, colored, and tinted PPFs, powered by advanced nanotechnology
                        research and innovation.
                    </div>
                    <div class="main__buttons">
                        <button>Contact us now</button>

                        <button>Learn more</button>
                    </div>
                </div>

                <!---car and description---->
                <div class="main__car">

                    <img class="main__car__main__img" src="{{ asset('./images/car_main.png') }}" alt="Car info image"
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
                        <img src="{{ asset('./images/car-vector1.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector2">
                        <img src="{{ asset('./images/car-vector2.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector3">
                        <img src="{{ asset('./images/car-vector3.png') }}" alt="" srcset="">
                    </div>

                    <div class="car-vector car-vector4">
                        <img src="{{ asset('./images/car-vector4.png') }}" alt="" srcset="">
                    </div>
                    <div class="car-vector car-vector5">
                        <img src="{{ asset('./images/car-vector5.png') }}" alt="" srcset="">
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
                <img src="{{ asset('./images/background.png') }}" alt="Car Image">
            </div>
        </section>

        <!---AMERICAN QUALITY--->
        <section class="american" id="american">
            <div class="american__name">
                Choose Your Expirience
            </div>
            <div class="american__wrapper">
                <div class="american__text__block">
                    <img src="{{ asset('./images/German_quality.png') }}" alt="">
                </div>
                <div class="american__car__block">
                    <img src="{{ asset('./images/quality_car.png') }}" alt="">
                </div>
            </div>
        </section>

        <!---About us section---->
        <section class="about_us" id="about_us">
            <div class="about_us__container">
                <div class="about_us__name">
                    who we are and what we do
                </div>
                <div class="about_us__desc">
                    <div class="about_us__desc-text">
                        <p>
                            Capsule provides reliable protection against chemical exposure and mechanical damage while
                            maintaining perfect transparency and color depth, setting
                            new standards in automotive coating protection.
                        </p>
                        <p>The film is made exclusively from high-quality polyurethane materials, ensuring durability and
                            reliability. It is easy to apply,
                            features a smooth texture, and offers unique water-repellent and self-healing properties thanks
                            to
                            advanced nanotechnology.</p>
                    </div>
                    <div class="about_us__desc-back">

                    </div>
                </div>


                <div class="about_us__wrapper">
                    <div class="about_us__image">
                        <div class="about_us__image-car">
                            <img src="{{ asset('./images/aboutcar.png') }}" alt="" srcset="">
                        </div>

                        <!--placeholders--->
                        <img class="about_us__image-placeholder1" src="{{ asset('./images/about_placeholder1.png') }}"
                            alt="" srcset="">
                    </div>

                    <div class="about_us__content">
                        <div class="about_us__content__name">
                            Dedicated to providing
                            Unparalleled quality
                        </div>
                        <div class="about_us__content__desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel risus nec tellus
                                dapibus accumsan a pharetra nisl. Sed nec convallis elit. Nullam id eros ac velit consequat
                                convallis. Nam vulputate nibh a orci egestas laoreet. Donec sed iaculis sapien, eget
                                pharetra diam. Suspendisse euismod enim et ante rhoncus, at volutpat mi interdum.
                                Suspendisse euismod sollicitudin tellus ut fringilla.
                            </p>

                            <p>Nulla venenatis, dolor et volutpat suscipit, urna urna tempor neque, ac pulvinar velit risus
                                vel ipsum. Pellentesque nec mauris quis tortor efficitur congue eu et mi. Nullam rutrum et
                                est sit amet sodales. Cras interdum sapien vel malesuada gravida. Mauris sed lorem in lectus
                                convallis egestas.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!----MAP---->
        <section class="map" id="map">
            <div class="map__wrapper">
                <div class="map__name-container">
                    <div class="map__name">
                        <h4>global distribution</h4>
                        <p>We are trusted by car owners all over the world</p>
                    </div>
                </div>


                <div class="map__container">
                    <div class="map__container-map">
                        <img src="{{ './images/map.png' }}" alt="" srcset="">

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

        <!--- Catalogue --->
        <section class="catalog" id="catalog">

            <div class="ctalog__placeholder">
                <img src="{{ asset('./images/catalog_placeholder.png') }}" alt="" srcset="">
            </div>

            <div class="catalog__wrapper">
                <div class="catalog__name">
                    <p>Catalogue</p>
                </div>

                <div class="catalog__swiper">
                    <div class="catalog__swiper-button">
                        <a href="#">
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
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>

                                    <li class="glide__slide">
                                        <div class="glide__slide__wrapper">
                                            <div class="glide__slide__image">
                                                <img src="{{ './images/placeholder.png' }}" alt="">
                                            </div>
                                            <div class="glide__slide__name">
                                                ITEM NAME
                                            </div>
                                            <div class="glide__slide__desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel
                                                    risus nec tellus dapibus accumsan a pharetra nisl. </p>
                                            </div>
                                        </div>
                                        <button>Order Now</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                    <img src="{{ asset('./images/arrow_catalog.png') }}" alt="" srcset="">
                                </button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <img src="{{ asset('./images/arrow_catalog.png') }}" alt="" srcset="">
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!---car--->

        <!------Gallery---->
        <section class="gallery" id="gallery">
            <div class="gallery__car__placeholder">
                <img src="{{ asset('./images/gallery_car.png') }}" alt="" srcset="">
            </div>
            <div class="gallery__wrapper">
                <div class="gallery__name">
                    <div class="gallery__name-text">
                        Gallery
                    </div>
                </div>

                <div class="gallery__images__wrapper">
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car2.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car2.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car1.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car1.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__big">
                        <a href="{{ asset('./images/car3.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car3.jpeg') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car4.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car4.jpeg') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car5.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small gallery__images__medium">
                        <a href="{{ asset('./images/car5.jpeg') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.jpeg') }}" alt="Gallery Image" />
                        </a>

                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car7.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car7.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car6.png') }}" data-fancybox="gallery"
                            data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car6.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                </div>



            </div>
        </section>

        <!----contact us car--->

        <!---COntact US----->
        <section class="contact" id="contact">
            <div class="contact_wrapper">
                <div class="contact_wrapper__animation">
                    <div class="contact__text__block">
                        <img src="{{ asset('./images/contact_us.png') }}" alt="">
                    </div>
                    <div class="contact__car__block">
                        <img src="{{ asset('./images/contact_car.png') }}" alt="">
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
                            <img src="{{ './images/logo_main.png' }}" alt="" srcset="">
                        </div>

                        <div class="contact__map-map">

                        </div>
                    </div>

                    <div class="contact__adress__block">
                        asdasd
                    </div>
                </div>





                <p>&copy; {{ date('Y') }} PPF Website. All rights reserved.</p>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('.header');
            const buttons = document.querySelectorAll('.header__nav__element button');
            const sections = document.querySelectorAll('section');
            const rectangle = document.getElementById('header_rectangle');

            const americanCar = document.querySelector('.american__car__block img');
            const contactCar = document.querySelector('.contact__car__block img');
            const americanWrapper = document.querySelector('.american__wrapper');
            const contactWrapper = document.querySelector('.contact_wrapper__animation');

            let lastScrollTop = 0; // Track the last scroll position

            // Function to update the rectangle position
            const updateRectanglePosition = (button) => {
                const rect = button.getBoundingClientRect();
                const containerRect = button.parentElement.parentElement.getBoundingClientRect();
                const rectangleWidth = 17; // Width of the arrow
                const buttonCenter = rect.left - containerRect.left + rect.width / 2; // Center of the button
                rectangle.style.left = `${buttonCenter - rectangleWidth / 2}px`; // Center the rectangle
            };

            // Scroll behavior for header
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
                const isScrolled = currentScroll > 0;

                // Change header top position
                if (currentScroll > lastScrollTop) {
                    header.style.top = '0';
                } else if (currentScroll === 0) {
                    header.style.top = '50px';
                }

                // Change header background color
                header.style.backgroundColor = isScrolled ? 'rgba(0, 0, 0, 0.794)' : 'rgba(0, 0, 0, 0.594)';

                // Highlight the active button and move rectangle
                let activeButton = buttons[0];
                sections.forEach((section) => {
                    const rect = section.getBoundingClientRect();
                    const sectionId = section.getAttribute('id');
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        activeButton = document.querySelector(
                            `.header__nav__element button[data-target="${sectionId}"]`);
                    }
                });
                updateRectanglePosition(activeButton);

                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative values
            });

            // Initialize rectangle position on page load
            updateRectanglePosition(buttons[0]);

            // Add click event to buttons for smooth scrolling
            buttons.forEach((button) => {
                button.addEventListener('click', () => {
                    const targetId = button.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - 100, // Adjust for header height
                            behavior: 'smooth'
                        });
                        updateRectanglePosition(button);
                    }
                });
            });

            // Intersection Observer for American Section
            const americanObserver = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            americanCar.style.animationName = 'moveCar';
                            americanCar.style.opacity = 1;
                        }
                    });
                }, {
                    threshold: 0.5
                } // Trigger when 50% of the section is visible
            );

            // Intersection Observer for Contact Section
            const contactObserver = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            contactCar.style.animationName = 'moveCar';
                            contactCar.style.opacity = 1;
                        }
                    });
                }, {
                    threshold: 0.5
                } // Trigger when 50% of the section is visible
            );

            // Observe respective sections
            if (americanWrapper) americanObserver.observe(americanWrapper);
            if (contactWrapper) contactObserver.observe(contactWrapper);
        });
    </script>

    <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

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
                        perView: 2
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
    </script>








    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
