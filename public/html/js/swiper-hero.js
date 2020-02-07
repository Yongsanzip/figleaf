var swiper = new Swiper('.hero-slide', {
    spaceBetween: 0,
    navigation: {
        nextEl: '.hero-button-next',
        prevEl: '.hero-button-prev',
    },
    loop:true,
    pagination: {
        el: '.hero-pagination',
        clickable: true,
    },
});