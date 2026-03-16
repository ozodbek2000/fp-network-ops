import "swiper/css/bundle";
import Swiper from "swiper/bundle";
import "swiper/css/scrollbar";

const swipers = () => {
    //MAIN SWIPER
    const main = new Swiper(".main__swiper", {
        slidesPerView: 2,
        spaceBetween: 16,
        loop: true,
        breakpoints: {
            767: {
                slidesPerView: 7,
                freeMode: true,
            },
        },
    });

    //SERVICE SWIPER
    const service = new Swiper(".service__swiper", {
        slidesPerView: 1.1,
        spaceBetween: 16,
        loop: true,
        pagination: {
            el: ".service__pagination",
            clickable: true,
        },
        breakpoints: {
            767: {
                slidesPerView: 4,
                spaceBetween: 20,
                grid: {
                    rows: 2,
                    fill: "row",
                },
                pagination: false,
                loop: false,
                freeMode: true,
            },
        },
    });

    const license = new Swiper(".license__swiper", {
        slidesPerView: 1.2,
        spaceBetween: 16,
        loop: true,
        scrollbar: {
            el: document.querySelector(".license__scrollbar"),
            hide: false,
            draggable: true,
            dragSize: 68,
        },
        navigation: {
            prevEl: ".license__navigation_prev",
            nextEl: ".license__navigation_next",
        },
        breakpoints: {
            767: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        },
        on: {
            slideChange(swiper) {
                const current = swiper.realIndex + 1;
                const padded = String(current).padStart(2, "0");
                document.querySelector(
                    ".license__num_current span"
                ).textContent = padded;
            },
        },
    });

    //GALLERY SWIPER
    const gallery = new Swiper(".gallery__swiper", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        navigation: {
            prevEl: ".gallery__navigations_prev",
            nextEl: ".gallery__navigations_next",
        },
        breakpoints: {
            767: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
};

export default swipers;
