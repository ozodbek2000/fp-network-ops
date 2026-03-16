import $ from "jquery";
import toggle from "./components/toggle";
import swipers from "./components/swipers";
import fancybox from "./components/fancybox";
import scrollGsap from "./components/scroll-gsap";
import headerTheme from "./components/header-theme";
import numbers from "./components/numbers";

$(document).ready(function () {
    toggle();
    swipers();
    fancybox();
    scrollGsap();
    headerTheme()
    numbers()
});
