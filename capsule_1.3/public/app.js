document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth < 768) {
        let elementsToRemove = document.querySelectorAll(".remove-on-mobile");
        elementsToRemove.forEach((el) => el.remove());
    }
});

/********** LANGUAGE DROPDOWN TOGGLE **********/
const languageButton = document.getElementById("languageButton");
const languageDropdown = document.getElementById("languageDropdown");

if (languageButton && languageDropdown) {
    // Toggle dropdown visibility on button click
    languageButton.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent click propagation
        const isDropdownVisible = languageDropdown.style.display === "block";
        languageDropdown.style.display = isDropdownVisible ? "none" : "block";
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
        if (!e.target.closest(".header__languages")) {
            languageDropdown.style.display = "none";
        }
    });
}


document.addEventListener("DOMContentLoaded", function() {
    const carAnimation = document.querySelector('.home_desc_animation-car');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                carAnimation.classList.add('animate');
            } else {
                carAnimation.classList.remove('animate'); // Optional: remove if you want it to repeat when visible again
            }
        });
    }, { threshold: 0.5 }); // When 50% is visible, trigger animation

    const triggerElement = document.querySelector('.home_desc_animation');
    if (triggerElement) {
        observer.observe(triggerElement);
    }
});
