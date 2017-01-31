$(document).foundation();
var swiper = new Swiper('.swiper-container', {
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	spaceBetween: 0,
	loop: true
});

$(document).ready(function(){
	var widthpage = $(document).width();
	if (widthpage <= 1024) {
		$('.fb-page').attr('data-width',475);
	}
	if (widthpage <= 800) {
		$('.fb-page').attr('data-width',350);
	}
	if (widthpage <= 480) {
		$('.fb-page').attr('data-width',379);
	}
	if (widthpage <= 375) {
		$('.fb-page').attr('data-width',340);
	}
	if (widthpage <= 320) {
		$('.fb-page').attr('data-width',286);
	}
});