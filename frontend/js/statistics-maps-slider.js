$(document).ready(function(){
			$('.team-statistics-maps-slider').slick({
				slidesToShow: 2,
				slidesToScroll: 2,
				autoplay: true,
				autoplaySpeed: 2000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});
