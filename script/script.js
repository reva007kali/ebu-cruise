

// hero swiper
var swiperHero = new Swiper(".hero-swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".custom-next",
        prevEl: ".custom-prev",
    },
});

// services slider
var swiperServices = new Swiper(".default-carousel", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        990: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        426: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
    },
});

// shipping group slider
var swiperShippinggroup = new Swiper(".shipping-group", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        990: {
            slidesPerView: 2,
            spaceBetween: 0,
        },
        426: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

// video hiring partner
document.addEventListener("DOMContentLoaded", function () {
    let videoHp = document.querySelector(".video-hp");

    if (videoHp) {
        let observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        videoHp.play();
                    } else {
                        videoHp.pause(); // Optional: Pause video when out of view
                    }
                });
            },
            { threshold: 0.5 } // Adjust threshold as needed (50% visibility)
        );

        observer.observe(videoHp);
    }
});

// testimoni slider
var swiperTestimoni = new Swiper(".testimoni", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        990: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});

// offices slider
var officeSlider = new Swiper(".office-slider", {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true, // Enable infinite loop
    autoplay: {
        delay: 4000, // 3 seconds between slides
        disableOnInteraction: false, // Keep autoplay running even after user interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        990: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
    },
});
