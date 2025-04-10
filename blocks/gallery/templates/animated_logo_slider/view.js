document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".logos").forEach(container => {
        let logos = Array.from(container.children);

        logos.forEach(logo => {
            let clone = logo.cloneNode(true);
            container.appendChild(clone);
        });

        let scrollAmount = 0;
        let speed = 1;

        function scrollLogos() {
            scrollAmount -= speed;

            if (Math.abs(scrollAmount) >= container.scrollWidth / 2) {
                scrollAmount = 0;
            }

            container.style.transform = `translateX(${scrollAmount}px)`;

            requestAnimationFrame(scrollLogos);
        }

        scrollLogos();
    });
});