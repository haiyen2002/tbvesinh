const swiperOption = {
    slidesPerView: 4,
    spaceBetween: 10,
    lazy: true,
    rewind: true,
    loopAdditionalSlides: 4,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        clickable: true,
    },
    breakpoints: {
        1: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
};
$(document).ready(function() {
    let commonSwipper = new Swiper(".common-swiper", swiperOption);
    fixHeader(200, 150, '.header-main');
    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();
});