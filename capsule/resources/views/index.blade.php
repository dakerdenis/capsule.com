@extends('layouts.app')

@section('title', 'Capsule - car proection')

@section('content')

    <div class="main__container">
        <!---header-->
        <header class="header" id="header">
            <div class="header__wrapper">
                <a href="#">
                    <img src="{{asset('./images/logo_main.png')}}" alt="">
                </a>

                <div class="header__navigation">
                    <div class="header__nav__burger">
                        <img src="{{asset('./images/circum_menu-burger.png')}}" alt="" srcset="">
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
                    <img src="{{asset('./images/header_rectangle.png')}}" id="header_rectangle" class="header_rectangle" alt="" />
                </div>
                

                <div class="header__languages">

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
                    <img src="{{ asset('./images/car_main.png') }}" alt="Car info image" srcset="">
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

        <!----Catalogue-->
        <section class="catalog" id="catalog">

        </section>
        <!---car--->

        <!------Gallery---->
        <section class="gallery" id="gallery">
            <div class="gallery__car__placeholder">
                <img src="{{asset('./images/gallery_car.png')}}" alt="" srcset="">
            </div>
            <div class="gallery__wrapper">
                <div class="gallery__name">
                    <div class="gallery__name-text">
                        Gallery
                    </div>
                </div>

                <div class="gallery__images__wrapper">
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car2.png') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car2.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car1.png') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car1.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__big">
                        <a href="{{ asset('./images/car3.jpeg') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car3.jpeg') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car4.jpeg') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car4.jpeg') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car5.png') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                    <div class="gallery__images__small gallery__images__medium">
                        <a href="{{ asset('./images/car5.jpeg') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car5.jpeg') }}" alt="Gallery Image" />
                        </a>

                    </div>
                    <div class="gallery__images__small">
                        <a href="{{ asset('./images/car7.png') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car7.png') }}" alt="Gallery Image" />
                        </a>
                        <a href="{{ asset('./images/car6.png') }}" data-fancybox="gallery" data-caption="Royal Park L-16A">
                            <img src="{{ asset('./images/car6.png') }}" alt="Gallery Image" />
                        </a>
                    </div>
                </div>



            </div>
        </section>

        <!---COntact US----->
        <section class="contact" id="contact">

        </section>

        <footer>
            <p>&copy; {{ date('Y') }} PPF Website. All rights reserved.</p>
        </footer>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const americanSection = document.getElementById('american');
            const carBlock = document.querySelector('.american__car__block img');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        carBlock.style.animationName = 'moveCar'; // Trigger the animation
                        carBlock.style.opacity = 1; // Ensure visibility
                    }
                });
            }, {
                threshold: 0.5, // Trigger when 50% of the section is visible
            });

            observer.observe(americanSection);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.querySelector('.header');
            
            let lastScrollTop = 0; // Track the last scroll position
    
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
                if (currentScroll > lastScrollTop) {
                    // User is scrolling down
                    header.style.top = '0'; // Move the header to the top
                } else if (currentScroll === 0) {
                    // User is back at the top of the page
                    header.style.top = '50px'; // Reset to the original position
                }
    
                lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative values
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.header__nav__element button');
            const sections = document.querySelectorAll('section');
            const rectangle = document.getElementById('header_rectangle');
    
            // Function to get the offset left of the active button
            const updateRectanglePosition = (button) => {
                const rect = button.getBoundingClientRect();
                const containerRect = button.parentElement.parentElement.getBoundingClientRect();
                rectangle.style.left = `${rect.left - containerRect.left}px`;
                rectangle.style.width = `${rect.width}px`;
            };
    
            // Add click event to buttons
            buttons.forEach((button) => {
                button.addEventListener('click', (e) => {
                    const targetId = button.getAttribute('data-target');
                    const targetSection = document.getElementById(targetId);
    
                    // Scroll to the corresponding section
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - 100, // Adjust for header height
                            behavior: 'smooth'
                        });
    
                        // Update rectangle position
                        updateRectanglePosition(button);
                    }
                });
            });
    
            // Highlight the active section and move rectangle on scroll
            window.addEventListener('scroll', () => {
                let activeButton = buttons[0]; // Default to first button
                sections.forEach((section) => {
                    const rect = section.getBoundingClientRect();
                    const sectionId = section.getAttribute('id');
    
                    // Check if the section is in the viewport
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        activeButton = document.querySelector(
                            `.header__nav__element button[data-target="${sectionId}"]`
                        );
                    }
                });
    
                // Update rectangle position
                updateRectanglePosition(activeButton);
            });
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection
