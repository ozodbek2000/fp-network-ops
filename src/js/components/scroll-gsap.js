import { gsap } from "gsap";

const scrollGsap = () => {
    const wrapper = document.querySelector("main.wrapper[data-fullpage]");

    if (!wrapper) return;

    const allSections = Array.from(
        document.querySelectorAll("main.wrapper > section[id], main.wrapper > footer[id]")
    );

    if (!allSections.length) return;

    // #custom пропускаем на десктопе
    const isMobileCheck = () => window.innerWidth <= 1080;
    const getSections = () =>
        isMobileCheck()
            ? allSections
            : allSections.filter((s) => s.id !== "custom");

    let sections = getSections();
    let current = 0;
    let animating = false;

    const sidebarWidth = 320;

    document.documentElement.style.overflow = "hidden";
    document.body.style.overflow = "hidden";
    document.body.style.height = "100vh";

    gsap.set(wrapper, {
        position: "fixed",
        top: 0,
        left: isMobileCheck() ? 0 : sidebarWidth,
        width: isMobileCheck() ? "100%" : `calc(100% - ${sidebarWidth}px)`,
        y: 0,
    });

    const goTo = (idx, instant = false) => {
        if (idx < 0 || idx >= sections.length) return;
        if (animating && !instant) return;

        animating = true;
        current = idx;

        let offsetY = 0;
        for (let i = 0; i < idx; i++) {
            offsetY += sections[i].offsetHeight;
        }

        history.replaceState(null, null, `#${sections[idx].id}`);

        gsap.to(wrapper, {
            y: -offsetY,
            duration: instant ? 0 : 0.9,
            ease: "power2.inOut",
            onComplete: () => {
                animating = false;
            },
        });
    };

    const onResize = () => {
        const mobile = isMobileCheck();

        // Пересчитываем список секций при ресайзе
        sections = getSections();

        // Корректируем current если #custom исчезает/появляется
        const currentId = allSections[current]?.id;
        const newIdx = sections.findIndex((s) => s.id === currentId);
        current = newIdx >= 0 ? newIdx : 0;

        gsap.set(wrapper, {
            left: mobile ? 0 : sidebarWidth,
            width: mobile ? "100%" : `calc(100% - ${sidebarWidth}px)`,
        });

        goTo(current, true);
    };

    window.addEventListener("resize", onResize);

    const hash = window.location.hash.replace("#", "");
    const hashIdx = sections.findIndex((s) => s.id === hash);
    goTo(hashIdx >= 0 ? hashIdx : 0, true);

    let wheelBuffer = 0;
    let wheelRaf = null;

    const onWheel = (e) => {
        e.preventDefault();
        if (animating) return;
        wheelBuffer += e.deltaY;
        cancelAnimationFrame(wheelRaf);
        wheelRaf = requestAnimationFrame(() => {
            if (Math.abs(wheelBuffer) < 20) { wheelBuffer = 0; return; }
            goTo(current + (wheelBuffer > 0 ? 1 : -1));
            wheelBuffer = 0;
        });
    };

    let ty = 0;
    let tx = 0;

    const onTouchStart = (e) => {
        ty = e.touches[0].clientY;
        tx = e.touches[0].clientX;
    };

    const onTouchEnd = (e) => {
        if (animating) return;
        const dy = ty - e.changedTouches[0].clientY;
        const dx = tx - e.changedTouches[0].clientX;
        if (Math.abs(dx) > Math.abs(dy) || Math.abs(dy) < 50) return;
        goTo(current + (dy > 0 ? 1 : -1));
    };

    const onKey = (e) => {
        if (animating) return;
        if (e.target.tagName === "INPUT" || e.target.tagName === "TEXTAREA") return;
        const map = { ArrowDown: 1, ArrowUp: -1, PageDown: 1, PageUp: -1, " ": 1 };
        if (!(e.key in map)) return;
        e.preventDefault();
        goTo(current + map[e.key]);
    };

    const onAnchorClick = (e) => {
        const a = e.target.closest('a[href^="#"]');
        if (!a) return;
        const id = a.getAttribute("href").replace("#", "");
        if (!id) return;
        const idx = sections.findIndex((s) => s.id === id);
        if (idx === -1) return;
        e.preventDefault();
        goTo(idx);
    };

    document.addEventListener("wheel", onWheel, { passive: false });
    document.addEventListener("touchstart", onTouchStart, { passive: true });
    document.addEventListener("touchend", onTouchEnd, { passive: true });
    document.addEventListener("keydown", onKey);
    document.addEventListener("click", onAnchorClick);

    return () => {
        document.documentElement.style.overflow = "";
        document.body.style.overflow = "";
        document.body.style.height = "";
        gsap.set(wrapper, { clearProps: "all" });
        window.removeEventListener("resize", onResize);
        document.removeEventListener("wheel", onWheel);
        document.removeEventListener("touchstart", onTouchStart);
        document.removeEventListener("touchend", onTouchEnd);
        document.removeEventListener("keydown", onKey);
        document.removeEventListener("click", onAnchorClick);
    };
};

export default scrollGsap;