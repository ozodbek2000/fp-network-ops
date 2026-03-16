import $ from "jquery";

const toggle = () => {
    $(".sidebar__list_item > a").click(function (event) {
        event.stopPropagation();
        event.preventDefault();

        const isActive = $(this).hasClass("active");

        $(".sidebar__list_item > a").removeClass("active");
        $(".sidebar__list-2").removeClass("active");
        $(".sidebar__overlay").addClass("active");

        if (!isActive) {
            $(this).addClass("active");
            $(this).siblings(".sidebar__list-2").addClass("active");
        }
    });

    $(document).click(function (event) {
        if (!$(event.target).closest(".sidebar__list-2").length) {
            $(".sidebar__list_item > a").removeClass("active");
            $(".sidebar__list-2").removeClass("active");
            $(".sidebar__overlay").removeClass("active");
        }
    });

    $(".header__burger").click(function (e) {
        $(".sidebar").toggleClass("active");
        $(".header__burger").toggleClass("active");
    });
    $(".header__list_item.search").click(function (e) {
        $(".header-search").toggleClass("active");
    });
    $(".sidebar__list_menu").click(function (e) {
        if ($(window).width() > 768) {
            $(this).closest(".sidebar__list-2").addClass("active");
            $(".sidebar__list-2").removeClass("fixed");
            $(".sidebar__overlay").toggleClass("active");
        }
    });
    $(".sidebar__list_menu").click(function (e) {
        if ($(window).width() <= 768) {
            $(this).closest(".sidebar__list-2").removeClass("active");
            $(".sidebar__list_item > a").removeClass("active");
            $(".sidebar__list-2").removeClass("fixed");
        }
    });
    $(".sidebar__search").click(function (e) {
        $(".sidebar-search").toggleClass("active");
    });
    $(".search-close").click(function (e) {
        $(".header__list_search").removeClass("active");
    });
    $(".service__grid_item").click(function (e) {
        e.stopPropagation();
        var isActive = $(this).hasClass("active");
        $(".service__grid_item").removeClass("active");
        if (!isActive) {
            $(this).addClass("active");
        }
    });

    $(document).click(function () {
        $(".service__grid_item").removeClass("active");
    });
};

export default toggle;
