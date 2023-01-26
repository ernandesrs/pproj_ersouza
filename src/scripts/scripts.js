const header = document.querySelector(".header");
const navToggler = header.querySelector(".toggler");

document.addEventListener("scroll", function () {
    let top = window.top.scrollY;

    if (top < 75 && header.classList.contains("fill-background")) {
        header.classList.remove("fill-background");
    }

    if (top >= 75 && !header.classList.contains("fill-background")) {
        header.classList.add("fill-background");
    }
});

navToggler.addEventListener("click", () => {
    const nav = header.querySelector(".nav");

    if (nav.classList.contains("visible")) {
        nav.classList.remove("mobile");
        nav.classList.remove("visible");
    } else {
        nav.classList.add("mobile");
        nav.classList.add("visible");
    }
});