import "swiper/css/bundle";
import Swiper from "swiper/bundle";

const swipers = () => {

    //MAIN SWIPER
    const main = new Swiper(".main__swiper", {

        slidesPerView: 7,
        spaceBetween: 16,
        
        // breakpoints: {
        //     640: {
        //         slidesPerView: 2,
        //     },
        //     768: {
        //         slidesPerView: 3,
        //     },
        //     1024: {
        //         slidesPerView: 3.4,
        //         spaceBetween: 20,
        //     },
        // },
    });
};

export default swipers;
