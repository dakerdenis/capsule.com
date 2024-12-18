// main.js

document.addEventListener('DOMContentLoaded', () => {
    /********** HEADER NAVIGATION AND SMOOTH SCROLL **********/
    const header = document.querySelector('.header');
    const buttons = document.querySelectorAll('.header__nav__element button');
    const mainButtons = document.querySelectorAll('.main__buttons button');
    const sections = document.querySelectorAll('section');
    const rectangle = document.getElementById('header_rectangle');
    let lastScrollTop = 0;

    // Smooth scrolling to sections
    const scrollToSection = (targetId) => {
        const targetSection = document.getElementById(targetId);
        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop - 100, // Adjust for header height
                behavior: 'smooth'
            });
        }
    };

    // Update rectangle position
    const updateRectanglePosition = (button) => {
        const rect = button.getBoundingClientRect();
        const containerRect = button.parentElement.parentElement.getBoundingClientRect();
        const rectangleWidth = 17;
        const buttonCenter = rect.left - containerRect.left + rect.width / 2;
        rectangle.style.left = `${buttonCenter - rectangleWidth / 2}px`;
    };

    // Scroll behavior for header
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const isScrolled = currentScroll > 0;

        header.style.top = currentScroll > lastScrollTop ? '0' : '50px';
        header.style.backgroundColor = isScrolled ? 'rgba(0, 0, 0, 0.794)' : 'rgba(0, 0, 0, 0.594)';

        let activeButton = buttons[0];
        sections.forEach((section) => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 100 && rect.bottom >= 100) {
                activeButton = document.querySelector(`.header__nav__element button[data-target="${section.id}"]`);
            }
        });
        updateRectanglePosition(activeButton);
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

    updateRectanglePosition(buttons[0]);

    // Header Navigation Buttons
    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            scrollToSection(button.getAttribute('data-target'));
            updateRectanglePosition(button);
        });
    });

    // Main Buttons (Contact Us and Learn More)
    if (mainButtons.length >= 2) {
        mainButtons[0].addEventListener('click', () => scrollToSection('contact'));
        mainButtons[1].addEventListener('click', () => scrollToSection('about_us'));
    }

    /********** ANIMATIONS WITH INTERSECTION OBSERVER **********/
    const observeSectionAnimation = (wrapperSelector, imgSelector, animationName) => {
        const wrapper = document.querySelector(wrapperSelector);
        const img = document.querySelector(imgSelector);
        if (wrapper && img) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        img.style.animationName = animationName;
                        img.style.opacity = 1;
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(wrapper);
        }
    };

    observeSectionAnimation('.american__wrapper', '.american__car__block img', 'moveCar');
    observeSectionAnimation('.contact_wrapper__animation', '.contact__car__block img', 'moveCar');

    /********** LANGUAGE DROPDOWN TOGGLE **********/
    const languageButton = document.getElementById('languageButton');
    const languageDropdown = document.getElementById('languageDropdown');
    if (languageButton && languageDropdown) {
        languageButton.addEventListener('click', () => {
            languageDropdown.style.display =
                languageDropdown.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.header__languages')) {
                languageDropdown.style.display = 'none';
            }
        });
    }

    /********** SELECT2 PLUGIN WITH FLAGS **********/
    if (typeof $ !== 'undefined' && $.fn.select2) {
        function format(item, state) {
            if (!item.id) return item.text;
            const url = state
                ? "https://oxguy3.github.io/flags/svg/us/"
                : "https://hatscripts.github.io/circle-flags/flags/";
            return $("<span>")
                .append($("<img>", {
                    class: "img-flag",
                    width: 26,
                    src: url + item.element.value.toLowerCase() + ".svg"
                }))
                .append(" " + item.text);
        }

        $("#countries").select2({
            templateResult: (item) => format(item, false)
        });
    }
});
