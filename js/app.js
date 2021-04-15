$(document).ready(function() {

	/* Initialize Swiper */
	var swiper = new Swiper('.swiper-container', {
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: false,
        /*autoplay: {
        	delay: 2500,
        	disableOnInteraction: false,
        },*/
        effect: 'slide',
        pagination: {
        	el: '.swiper-pagination',
        	clickable: true,
        },
        // Navigation arrows
        navigation: {
        	nextEl: '.swiper-button-next',
        	prevEl: '.swiper-button-prev',
        },
    });
    
});