import $ from "jquery";

const toggle = () => {
    $(".sidebar__list_item > a").click(function (event) {
        event.stopPropagation();
        event.preventDefault();

        const isActive = $(this).hasClass("active");

        $(".sidebar__list_item > a").removeClass("active");
        $(".sidebar__list-2").removeClass("active");

        if (!isActive) {
            $(this).addClass("active");
            $(this).siblings(".sidebar__list-2").addClass("active");
        }
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(".sidebar__list-2").length) {
            $(".sidebar__list_item > a").removeClass("active");
            $(".sidebar__list-2").removeClass("active");
        }
    });

    $(".header__burger").click(function (e) {
        $(".sidebar").toggleClass("active");
    });
    $(".search").click(function (e) {
        $(".header__list_search").toggleClass("active");
    });
    $(".sidebar__search").click(function (e) {
        $(".sidebar__wrapper > .header__list_search").toggleClass("active");
    });
    $(".search-close").click(function (e) {
        $(".header__list_search").toggleClass("active");
    });
};

export default toggle;
