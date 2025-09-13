(function ($) {
    "use strict";

    window.addEventListener("load", function () {
        const loader = document.getElementById("page-loader");
        if (loader) {
            loader.style.transition = "opacity 0.5s ease";
            loader.style.opacity = "0";
            setTimeout(function () {
                loader.style.display = "none";
            }, 500);
        }
    });

    $(document).ready(function () {
        /* Video */
        var $videoSrc;
        $(".play-btn").click(function () {
            $videoSrc = $(this).data("src");
        });

        $("#myModal").on("shown.bs.modal", function (e) {
            $("#video").attr(
                "src",
                $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
            );
        });

        $("#myModal").on("hide.bs.modal", function (e) {
            $("#video").attr("src", $videoSrc);
        });

        // home page slider
        var swiper = new Swiper(".slider", {
            effect: "fade",
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".main-slider-button-next",
                prevEl: ".main-slider-button-prev",
            },
        });

        // product single page
        var thumb_slider = new Swiper(".product-thumbnail-slider", {
            autoplay: true,
            loop: true,
            spaceBetween: 8,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        var large_slider = new Swiper(".product-large-slider", {
            autoplay: true,
            loop: true,
            spaceBetween: 10,
            effect: "fade",
            thumbs: {
                swiper: thumb_slider,
            },
        });

        window.addEventListener("load", (event) => {
            //isotope
            $(".isotope-container").isotope({
                // options
                itemSelector: ".item",
                layoutMode: "masonry",
            });

            // Initialize Isotope
            var $container = $(".isotope-container").isotope({
                // options
                itemSelector: ".item",
                layoutMode: "masonry",
            });

            $(document).ready(function () {
                //active button
                $(".filter-button").click(function () {
                    $(".filter-button").removeClass("active");
                    $(this).addClass("active");
                });
            });

            // Filter items on button click
            $(".filter-button").click(function () {
                var filterValue = $(this).attr("data-filter");
                if (filterValue === "*") {
                    // Show all items
                    $container.isotope({ filter: "*" });
                } else {
                    // Show filtered items
                    $container.isotope({ filter: filterValue });
                }
            });
        });
    }); // End of a document

    // anaimation word changing
    const words = ["Birtes", "Mekanik"];
    const typedEl = document.getElementById("typed-word");
    let wordIndex = 0,
        charIndex = 0;
    const typingDelay = 150;
    const erasingDelay = 100;
    const highlightTime = 700;
    const newWordDelay = 500;

    function type() {
        const current = words[wordIndex];
        if (charIndex < current.length) {
            typedEl.textContent += current.charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            // highlight
            typedEl.classList.add("highlight");
            setTimeout(() => {
                typedEl.classList.remove("highlight");
                setTimeout(erase, highlightTime);
            }, newWordDelay);
        }
    }

    function erase() {
        const current = words[wordIndex];
        if (charIndex > 0) {
            typedEl.textContent = current.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            // next word
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, typingDelay);
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        setTimeout(type, newWordDelay);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const slide = document.querySelector(".slider-video-slide");
        const video = slide.querySelector("video");
        const tracker = slide.querySelector(".video-tracker");

        if (!video || !tracker) return;

        video.addEventListener("timeupdate", function () {
            if (video.duration) {
                const pct = (video.currentTime / video.duration) * 100;
                tracker.style.width = pct + "%";
            }
        });

        // Reset tracker when video loops:
        video.addEventListener("ended", () => {
            tracker.style.width = "0%";
        });
    });

    // end of animation word changing

    // scroll to top
    document.addEventListener("DOMContentLoaded", function () {
        const scrollBtn = document.getElementById("btn-scroll-to-top");

        // Show/hide the button depending on scroll position
        window.addEventListener("scroll", function () {
            if (window.scrollY > 200) {
                // threshold, adjust (200px here)
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        // When clicked, scroll to top smoothly
        scrollBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    });

    // endf of scroll to top

    $(document).ready(function () {
        $(".testimonial-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            navText: [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>',
            ],
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                992: { items: 6 },
            },
        });
    });
})(jQuery);
