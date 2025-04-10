$(document).ready(function() {
	if ($('.headerCarusel').length) {
		$('.headerCarusel').owlCarousel({
			items:1,
			loop:true,
			autoplay:true,
			autoplayTimeout:5000,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
		});
	};
	if ($('.headerVideoCarusel').length) {
		$('.headerVideoCarusel').owlCarousel({
			items:1,
			loop: true,
			nav: true,
			margin: 10,
			navText: ['<i class="icon fa fa-angle-left"></i>','<i class="icon fa fa-angle-right"></i>'],
			esponsiveClass: true,
			responsive:{
				0: {
					items:1,
				},
				991: {
					items: 2,
				},
				1000: {
					items: 3,
				},
			},
		});
	};
	if ($('.headerImageCarusel').length) {
		$('.headerImageCarusel').owlCarousel({
			items:1,
			loop: false,
			nav: true,
			margin: 10,
			navText: ['<i class="icon fa fa-angle-left"></i>','<i class="icon fa fa-angle-right"></i>'],
			esponsiveClass: true,
			responsive:{
				0: {
					items:1,
				},
				991: {
					items: 2,
				},
				1000: {
					items: 5,
				},
			},
		});
	};
});
