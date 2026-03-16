import $ from "jquery";

const headerTheme = () => {
    const $header = $("header");
    const header = document.querySelector("header");

    const isMobile = $(window).width() < 1024;

    const allSections = [...document.querySelectorAll("section, [data-section]")]
        .filter((section) => getComputedStyle(section).display !== "none")
        .filter((section) => isMobile ? true : section.dataset.ignore !== "true");

    const darkSections = allSections.filter((section) => section.dataset.index === "dark");

    if (!$header.length || !darkSections.length) return;

    if (isMobile) {
        const mobileObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const isDark = entry.target.dataset.index === "dark";
                        $header.toggleClass("dark", isDark);
                    }
                });
            },
            {
                rootMargin: `-50% 0px -49% 0px`,
                threshold: 0,
            }
        );

        allSections.forEach((section) => mobileObserver.observe(section));
        return;
    }

    const headerHeight = header?.offsetHeight ?? 0;

    const observerOptions = {
        rootMargin: `-${headerHeight}px 0px -${window.innerHeight - headerHeight - 1}px 0px`,
        threshold: 0,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const isDark = entry.target.dataset.index === "dark";
                $header.toggleClass("dark", isDark);
            }
        });
    }, observerOptions);

    allSections.forEach((section) => observer.observe(section));
};

export default headerTheme;