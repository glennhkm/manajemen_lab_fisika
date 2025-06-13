AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

const backToTopBtn = document.getElementById("backToTop");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.remove("opacity-0", "invisible");
        backToTopBtn.classList.add("opacity-100", "visible");
    } else {
        backToTopBtn.classList.add("opacity-0", "invisible");
        backToTopBtn.classList.remove("opacity-100", "visible");
    }
});

backToTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

// Form submissions
document.querySelectorAll("form").forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        // Show success message
        const button = form.querySelector('button[type="submit"]');
        const originalText = button.textContent;

        button.textContent = "Terkirim! ✓";
        button.style.background = "linear-gradient(135deg, #10b981, #059669)";

        setTimeout(() => {
            button.textContent = originalText;
            button.style.background =
                "linear-gradient(135deg, #fbbf24, #f59e0b)";
            form.reset();
        }, 2000);
    });
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});
