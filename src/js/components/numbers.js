import $ from "jquery";

const numbers = () => {
    const animateCounter = ($el, target, duration = 2000) => {
        const start = 0;
        const startTime = performance.now();

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            const eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const current = Math.floor(eased * (target - start) + start);

            $el.text(current);

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                $el.text(target);
            }
        };

        requestAnimationFrame(update);
    };

    const $section = $("#facts");
    if (!$section.length) return;

    const $counters = $(".facts__grid .facts__grid_item h3");

    $counters.each(function () {
        const $el = $(this);
        const target = parseInt($el.text(), 10);

        if (!isNaN(target)) {
            $el.attr("data-target", target).text("0");
        }
    });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    $counters.each(function () {
                        const $el = $(this);
                        const target = parseInt($el.attr("data-target"), 10);

                        if (!isNaN(target)) {
                            animateCounter($el, target);
                        }
                    });

                    observer.disconnect(); 
                }
            });
        },
        { threshold: 0.3 }
    );

    observer.observe($section[0]);
};

export default numbers;