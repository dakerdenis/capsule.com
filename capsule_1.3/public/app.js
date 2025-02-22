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
