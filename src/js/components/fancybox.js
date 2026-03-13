import { Fancybox } from "@fancyapps/ui/dist/fancybox/";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

const fancybox = () => {
    const slides = document.querySelectorAll(".license__slide img");

    slides.forEach((img, index) => {
        img.closest(".license__slide").setAttribute("data-fancybox", "certificate");
        img.closest(".license__slide").setAttribute("data-src", img.src);
        img.closest(".license__slide").setAttribute("data-caption", img.alt || `${index + 1} / ${slides.length}`);
    });

    Fancybox.bind('[data-fancybox="certificate"]', {
        groupAll: false,
        animated: true,
        showClass: "f-fadeIn",
        hideClass: "f-fadeOut",
        Toolbar: {
            display: {
                left: [],
                middle: ["infobar"],
                right: ["close"],
            },
        },
        Images: {
            zoom: true,
        },
        Thumbs: {
            type: "classic",
        },
    });
};

export default fancybox;