import "swiper/css/bundle";
import Swiper from "swiper/bundle";

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
            }
        }
    });
};

export default swipers;
