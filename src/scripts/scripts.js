const header = document.querySelector(".header");

document.addEventListener("scroll", function () {
    let top = window.top.scrollY;

    if (top < 75 && header.classList.contains("fill-background")) {
        header.classList.remove("fill-background");
    }

    if (top >= 75 && !header.classList.contains("fill-background")) {
        header.classList.add("fill-background");
    }
});
