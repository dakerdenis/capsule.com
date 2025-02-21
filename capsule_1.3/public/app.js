document.addEventListener("DOMContentLoaded", function () {
    if (window.innerWidth < 768) {
        let elementsToRemove = document.querySelectorAll(".remove-on-mobile");
        elementsToRemove.forEach(el => el.remove());
    }
});
