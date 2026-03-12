import "swiper/css/bundle";
import Swiper from "swiper/bundle";
import 'swiper/css/scrollbar';


const swipers = () => {
    //MAIN SWIPER
    const main = new Swiper(".main__swiper", {
        slidesPerView: 2,
        spaceBetween: 16,
        loop: true,
        freeMode: true,
        breakpoints: {
            767: {
                slidesPerView: 7,
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
        freeMode: true,
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
            },
        },
    });

    //LICENSE SWIPER
    const license = new Swiper(".license__swiper", {
        slidesPerView: 3,
        spaceBetween: 16,
        scrollbar: {
            el: ".license__scrollbar",
            hide: false,
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
    });
};

export default swipers;
