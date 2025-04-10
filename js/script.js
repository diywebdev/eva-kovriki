$(document).ready(function() {
	if ($('.headerCarusel').length) {
		$('.headerCarusel').owlCarousel({
			items:1,
			loop:true,
			autoplay:true,
			autoplayTimeout:5000,
			autoplaySpeed: 2000,
			margin: 10,
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
	if ($('#mixContainer').length) {
		var mixer = mixitup('#mixContainer');
	};
	if ($('input[mask="phone"]').length) {
		$('input[mask="phone"]').mask("+7 (999) 999-99-99");
	}
	if ($('#cart').length) {
		cartAllSum();
	}
	categoryListStyle();
});


$(window).resize(function() {
  categoryListStyle();
});

function categoryListStyle() {
	var screen_w = $(document).width();
	if (screen_w > 768) {
		$('#leftCategoryListCollapse').addClass('show');
		$('.leftCategoryListBtn').removeClass('active');
	}
	else {
		$('#leftCategoryListCollapse').removeClass('show');
	};
};

$('.leftCategoryListBtn').click(function(e) {
	var screen_w = $(document).width();
	if (screen_w >= 768) {
		e.stopPropagation();
		e.preventDefault();
		return false;
	}
	$(this).toggleClass('active');
});


$('.closeSaleBoxBtn').click(function(e) {
	$('#saleBox').removeClass('show');
	$.get('/home/sale');
	e.preventDefault();
});

$('.markaListItem').click(function() {
	$('.markaListItem').removeClass('active');
	$(this).addClass('active');
});

var CalcFunctions = {
	material: {
		body: {
			sota: {
				black: '/img/calculate/body/sota/black.png',
				gray: '/img/calculate/body/sota/gray.png',
				dark_blue: '/img/calculate/body/sota/dark_blue.png',
				brown: '/img/calculate/body/sota/brown.png',
				beige: '/img/calculate/body/sota/beige.png',
				blue: '/img/calculate/body/sota/blue.png',
				red: '/img/calculate/body/sota/red.png',
				green: '/img/calculate/body/sota/green.png',
				purple: '/img/calculate/body/sota/purple.png',
				orange: '/img/calculate/body/sota/orange.png',
				yellow: '/img/calculate/body/sota/yellow.png',
				dark_beige: '/img/calculate/body/sota/dark_beige.png',
			},
			romb: {
				black: '/img/calculate/body/romb/black.png',
				gray: '/img/calculate/body/romb/gray.png',
				beige: '/img/calculate/body/romb/beige.png',
				blue: '/img/calculate/body/romb/blue.png',
				red: '/img/calculate/body/romb/red.png',
				green: '/img/calculate/body/romb/green.png',
				purple: '/img/calculate/body/romb/purple.png',
				orange: '/img/calculate/body/romb/orange.png',
				white: '/img/calculate/body/romb/white.png',
				burgundy: '/img/calculate/body/romb/burgundy.png',
				yellow: '/img/calculate/body/romb/yellow.png',
				dark_beige: '/img/calculate/body/romb/dark_beige.png',
			},
		},
		border: {
			black: '/img/calculate/border/black.png',
			gray: '/img/calculate/border/gray.png',
			light_gray: '/img/calculate/border/light_gray.png',
			brown: '/img/calculate/border/brown.png',
			beige: '/img/calculate/border/beige.png',
			blue: '/img/calculate/border/blue.png',
			dark_blue: '/img/calculate/border/dark_blue.png',
			red: '/img/calculate/border/red.png',
			yellow: '/img/calculate/border/yellow.png',
			green: '/img/calculate/border/green.png',
			dark_green: '/img/calculate/border/dark_green.png',
			orange: '/img/calculate/border/orange.png',
			white: '/img/calculate/border/white.png',
			purple: '/img/calculate/border/purple.png',
			beige_new: '/img/calculate/border/cant-black-begeviy.png',
			blue_new: '/img/calculate/border/cant-black-blue.png',
			green_new: '/img/calculate/border/cant-black-green.png',
			brown_new: '/img/calculate/border/cant-black-korichnev.png',
			orange_new: '/img/calculate/border/cant-black-orang.png',
			red_new: '/img/calculate/border/cant-black-red.png',
			gray_new: '/img/calculate/border/cant-black-seriy.png',
			yellow_new: '/img/calculate/border/cant-black-yelow.png',
		},
		saddle: {
			type_1: '/img/calculate/saddle/type_1.png',
			type_2: '/img/calculate/saddle/type_2.png',
			type_3: '/img/calculate/saddle/type_3.png',
			type_4: '/img/calculate/saddle/type_4.png',
		},
	},
	chnageBodyType: function (type) {
		var img = this.material.body[type].black;
		$('#figureBody').find('img').attr('src', img);
	},
	changeBodyColor: function (color, type) {
		var img = this.material.body[type][color];
		$('#figureBody').find('img').attr('src', img);
	},
	changeBorderColor: function (color) {
		var border = this.material.border[color];
		$('#figureBorder').find('img').attr('src', border);
	},
	changeeSaddle: function (type) {
		let saddle = this.material.saddle[type],
			FigureSaddle = $('#figureSaddle');

		FigureSaddle.find('img').attr('src', saddle);
		if(!FigureSaddle.is(':visible')){
			FigureSaddle.toggle();
		} else if(!type){
			FigureSaddle.toggle();
		}
	},
	radioCheck: function (elem) {
		$(elem).find('.calcRadioInp').trigger('click');
	},
	changeDefaultBorderCheck: function (type) {
		var list_color = $('.calcBodyColorList[data-type="' + type + '"]').find('.calcBodyColorItem');
		if (type == 'sota') {
			$('.calcBodyColorList[data-type="romb"]').find('.calcBodyColorItem').removeClass('active');
		}
		else if (type == 'romb') {
			$('.calcBodyColorList[data-type="sota"]').find('.calcBodyColorItem').removeClass('active');
		};
		for (var i = 0; i < list_color.length; i++) {
			if ($(list_color).eq(i).hasClass('active')) {
				break;
				return;
			};
			$(list_color).eq(0).trigger('click');
		};
	},
};

$('#iconCheck').on('change', function () {
	$('#figureIcon').toggle();
});
// $('#saddleCheck').on('change', function () {
// 	$('#figureSaddle').toggle();
// });

$('.matItem').click(function() {
	var type = $(this).attr('data-type');
	$('.matItem').removeClass('active');
	$('.calcBodyColorList').removeClass('active');
	CalcFunctions.chnageBodyType(type);
	CalcFunctions.changeDefaultBorderCheck(type);
	$('.calcBodyColorList[data-type="' + type + '"]').addClass('active');
	$(this).addClass('active');
	$(this).parents('.matItemCol').find('input[type="radio"]').trigger('click');
});

$('.typeItem').click(function() {
	$('.typeItem').removeClass('active');
	$(this).addClass('active');
	$(this).parents('.typeItemCol').find('input[type="radio"]').trigger('click');
});

$('.tunnelItem').click(function() {
	$('.tunnelItem').removeClass('active');
	$(this).addClass('active');
	$(this).parents('.tunnelItemCol').find('input[type="radio"]').trigger('click');
});

$('.prizeItem').click(function() {
	//$('.prizeItem').removeClass('active');
	let status = $(this).parents('.prizeSelect').find('input[type="hidden"]').val();
	if(status == 1){
		if($('.prizeItem').hasClass('active')){
			$(this).removeClass('active');
			$(this).parents('.prizeSelect').find('input[type="checkbox"]').trigger('click');
			calculateFunction();
		}else{
			$(this).addClass('active');
			$(this).parents('.prizeSelect').find('input[type="checkbox"]').trigger('click');
		}
	} else {
		alert('В данный момент подарок не доступен к выбору. Приносим извинения')
	}
});

$('#saddleOne input:checkbox').click(function(){
	if ($(this).is(':checked')) {
		$('#saddleOne input:checkbox').not(this).prop('checked', false);
		var type = $(this).attr('data-type');
	}
	CalcFunctions.changeeSaddle(type);
})
$('.complact1 input:checkbox').click(function(){
	if ($(this).is(':checked')) {
		if($('.complact input:checkbox').is(':checked')){
			$('.complact input:checkbox').not(this).prop('checked', false);
		}
	}
});

$('.complact input:checkbox').click(function(){
	if ($(this).is(':checked')) {
		if($('.complact1 input:checkbox').is(':checked')){
			$('.complact1 input:checkbox').not(this).prop('checked', false);
		}
	}
});

$('.calcBodyColorItem .calc_color_item_img').click(function() {
	var _this = $(this).parents('.calcBodyColorItem');
	calcBodyColorItemClick(_this);
});
$('.calcBodyColorItem p').click(function() {
	var _this = $(this).parents('.calcBodyColorItem');
	calcBodyColorItemClick(_this);
});

function calcBodyColorItemClick(_this) {
	var color = $(_this).attr('data-color');
	var type = $(_this).parents('.calcBodyColorList').attr('data-type');
	CalcFunctions.changeBodyColor(color, type);
	CalcFunctions.radioCheck(_this);
	$('.calcBodyColorItem').removeClass('active');
	$(_this).addClass('active');
}

$('.calcBorderColorItem .calc_color_item_img').click(function() {
	var _this = $(this).parents('.calcBorderColorItem');
	calcBorderColorItemClick(_this);
});
$('.calcBorderColorItem p').click(function() {
	var _this = $(this).parents('.calcBorderColorItem');
	calcBorderColorItemClick(_this);
});
function calcBorderColorItemClick(_this) {
	var color = $(_this).attr('data-color');
	CalcFunctions.changeBorderColor(color);
	CalcFunctions.radioCheck(_this);
	$('.calcBorderColorItem').removeClass('active');
	$(_this).addClass('active');
}

$('.inpItem').focus(function() {
	$(this).parents('.input_group').addClass('focus');
});
$('.inpItem').blur(function() {
	if (!$(this).val().length || $(this).val() == "+374 (__) __-__-__") {
		$(this).parents('.input_group').removeClass('focus');
	}
});
$('.calcRadioInp').click(function(e) {
// 	e.stopPropagation();
// 	e.preventDefault();
// 	return false;
});

$('.complactInp').on('change', function () {
	if ($(this).attr('data-value') == 'all') {
		$('.complactInp[data-value="single"]').prop('checked', false);
	}
	else {
		$('.complactInp[data-value="all"]').prop('checked', false);
	};
});
$('.calcPaymentInp').on('change', function () {
	calculateFunction();
});

$('#selectAutoType').on('change', function () {
	var type = $(this).val();
	var data_price = "data-price";
	if (type == 'geep') {
		data_price = "data-price-geep";
	};
	var price_label = $('.product_label_price');
	for(let i = 0; i < price_label.length; i++) {
		let price = $(price_label).eq(i).attr(data_price);
		$(price_label).eq(i).find('span').text(price);
	}
	calculateFunction();
});

function calculateFunction() {
	let inputs = $('#calcForm').find('.calcPaymentInp'),
		price = 0,
		type = $('#selectAutoType').val(),
		data_price = "data-price",
		priceTmp = 0;

	if (type == 'geep') {
		data_price = "data-price-geep";
	};
	for (var i = 0; i < inputs.length; i++) {
		if ($(inputs).eq(i).is(':checked')) {
			if ($(inputs).eq(i).hasClass('forCount')) {
				price += (parseInt($(inputs).eq(i).attr(data_price)) * $(inputs).eq(i).parents('.forCountGroup').find('.countInp').val());
			} else if (i == 13) {
				priceTmp = parseInt(priceTmp) * parseInt($(inputs).eq(i).attr(data_price)) / parseInt(100);
				price += parseInt(priceTmp);
			} else {
				price += parseInt($(inputs).eq(i).attr(data_price));
			}
			if (i < 6) {
				priceTmp = parseInt(price);
			}
		}
	}
	$('#allPrice').text(price);
	$('#allPriceInp').val(price);
};

$('.openPrimer').click(function(e) {
	e.preventDefault();
	let img = $(this).attr('data-url');
	$('#modaleImage').find('img').attr('src', img);
	$('#modaleImage').modal('show');
});

$('.forCountGroup input:checkbox').click(function(e) {
	if ($(this).is(':checked')) {
		$('.count_box').attr('style', 'display:flex;');
	} else {
		$('.count_box').attr('style', 'display:none;');
	}
});

$('.starItem').click(function() {
	var check = $(this).parents('.star_list').find('.starItem').children('input').eq(4);
	if (!check.hasClass("active")) {
		$(this).nextAll('.star_li').children('.star').removeClass('far').addClass('fas');
		$(this).nextAll('.star_li').children('input').attr( "checked","checked").addClass('active');
		$(this).children('input').attr("checked", "checked").addClass('active');
		$(this).children('.star').removeClass('far').addClass('fas');
	};
});

$('.fileBtn').click(function() {
	$(this).parents('.inputGroup').find('input[type="file"]').trigger('click');
});

$('body').on('change', '.fileInput', function (evt) {
	var files = evt.target.files;
	var reader = new FileReader();
	var elem = $(this);
	for (var i = 0, f; f = files[i]; i++) {
		if (!f.type.match('image.*')) {
			continue;
		};
		var reader = new FileReader();
		reader.onload = (function (theFile) {
			return function (e) {
				var box = document.createElement('DIV');
				$(box).addClass('tpl');
				box.innerHTML = ['<img src="', e.target.result, '" />'].join('');
				$(elem).parents('.inputGroup').find('.imageList').html('');
				$(elem).parents('.inputGroup').find('.imageList').append(box);
			};
		})(f);
		reader.readAsDataURL(f);
	};
});

function sendReview(form, e) {
	var action = $(form).attr('action');
	var formData = new FormData($(form)[0]);
	$.ajax({
		url: action,
		type: "POST",
		data: formData,
		dataType: 'json',
		processData: false,
		contentType: false,
		success: function (callback) {
			if (callback == true) {
				$('#reviewModal').modal('hide');
			}
		},
	});
	e.preventDefault();
	return false;
};

$('.countPlusBtn').click(function() {
	var id = $(this).parents('.cartTr').attr('data-id');
	var count_box = $(this).parents('.countBox').find('.countInp');
	var count = $(count_box).val();
	var price = $(this).parents('.countBox').find('.priceInp').val();
	count++;
	$(count_box).val(count);
	var new_price = price * count;
	if ($(this).parents('.cartTable').length) {
		$(this).parents('.cartTr').find('.thisPrice').text(new_price);
		sendCount(id, count);
	}
	else if ($(this).parents('#calcForm').length) {
		calculateFunction();
	}
});
$('.countMinusBtn').click(function() {
	var id = $(this).parents('.cartTr').attr('data-id');
	var count_box = $(this).parents('.countBox').find('.countInp');
	var count = $(count_box).val();
	var price = $(this).parents('.countBox').find('.priceInp').val();
	if (count > 1) {
		count--;
	}
	else {
		count = 1;
	}
	$(count_box).val(count);
	var new_price = price * count;
	if ($(this).parents('.cartTable').length) {
		$(this).parents('.cartTr').find('.thisPrice').text(new_price);
		sendCount(id, count);
	}
	else if ($(this).parents('#calcForm').length) {
		calculateFunction();
	}
});

function cartAllSum() {
	let cart_item = $('.cartTr'),
		region_select_val = $('.cartRegionSelect').val(),
		all_price = 0,
		table = $('.cartTableBox'),
		salePrice = $(table).find('.salePrice').text();

	for (let i = 0; i < cart_item.length; i++) {
		all_price += Number($(cart_item).eq(i).find('.thisPrice').text());
	};
	if (region_select_val != 0) {
		let delivery_price = Number($(`.regionPriceListInp[name="${region_select_val}"]`).val());
		all_price += delivery_price;
		if (delivery_price > 0) {
			$('.deliveryPrice').text(delivery_price);
			$('.regionPriceText').addClass('active');
		}
		else {
		
			$('.deliveryPrice').text(0);
			$('.regionPriceText').removeClass('active');
		}
		}else{
			
			$('.deliveryPrice').text(0);
			$('.regionPriceText').removeClass('active');
		}

	//Расчет итого
	$('.predPrice').text(all_price);
	if(salePrice > 0) {
		salePrice = parseInt(all_price)*parseFloat(salePrice)/parseInt(100);
		all_price = parseInt(all_price)-parseInt(salePrice);
	}

	$('.allPrice').text(all_price);
	$('.allCount').text(cart_item.length);
	$('#allPriceInp').val($('.allPriceText').text());
};

function sendCount(id, count) {
	$.getJSON('/cart/change_count/' + id + '/' + count,  function(callBack) {
		if (callBack === true) {
			cartAllSum();
		}
	});
}

$('.cartRemoveBtn').click(function() {
	var _this = $(this);
	var id = $(this).parents('.cartTr').attr('data-id');
	$.getJSON('/cart/remove_card/' + id, function(callBack) {
		if (callBack === true) {
			$(_this).parents('.cartTr').remove();
			cartAllSum();
		}
	});
});


$('.cartRegionSelect').on('change', function() {
	let val = $(this).val()
	if (val == 0) {
		$('.cartRegionTypeInp').prop('disabled', true);
		$('.cartRegionTypeInp').prop('required', false);
	}
	else {
		$('.cartRegionTypeInp').prop('disabled', false);
		$('.cartRegionTypeInp').prop('required', true);
	};
	cartAllSum();
});

$('.confirmHref').click(function(e) {
	return confirm('Вы уверены?');
});

$('.suitcasesImgBtn').click(function() {
	$('#suitcasesBigImg').attr('src', $(this).find('img').attr('src'));
});

$('.iconContainer').click(function() {
	var screen_w = $(document).width();
	// if (screen_w >= 991) {
	// 	return false;
	// }
	$('.why_choose_item').removeClass('active');
	$(this).parents('.why_choose_item').toggleClass('active');
});

function sendForm(form, e) {
	var action = $(form).attr('action');
	var data = $(form).serialize();

	if(action === "/contact/call"){
		var captcha = grecaptcha.getResponse();
		if (!captcha.length) {
			// Выводим сообщение об ошибке
			$('.recaptchaError').text('* Вы не прошли проверку "Я не робот"');
		} else {
			// получаем элемент, содержащий капчу
			$('.recaptchaError').text('');
			$.post(action, data, function(callBack) {
				if (callBack == true) {
					if ($(form).parents('#quick_order').length || $(form).parents('#orderCallModal').length) {
						$(form).parents('.modalBody').find('.responseText').addClass('active');
						$(form).remove();
					}
					else {
						$(form).find('input').val('');
						$(form).find('textarea').val('');
						$(form).find('.responseText').addClass('active');
					};
				};
			}, 'json');
			e.preventDefault();
			return false;
		}
	} else {
		$.post(action, data, function (callBack) {
			if (callBack == true) {
				if ($(form).parents('#quick_order').length || $(form).parents('#orderCallModal').length) {
					$(form).parents('.modalBody').find('.responseText').addClass('active');
					$(form).remove();
				} else {
					$(form).find('input').val('');
					$(form).find('textarea').val('');
					$(form).find('.responseText').addClass('active');
				}
				;
			}
			;
		}, 'json');
	}
	e.preventDefault();
	return false;
};

function sendCartForm(form, e) {

	let action = $(form).attr('action'),
		table = $('.cartTableBox'),
		tableNew = $('.cartTable'),
		styleHeadTd = "font-size: 12px;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: right;padding: 7px;color: #222222;",
		styleBodyTd = "font-size: 12px;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;";
	$(table).find(".countBox").each(function(i,e){
		$(e).html($(e).find(".countInp").val());
	});
	$(table).find(".cart_remove").remove();
	tableNew.attr("style","border-collapse: collapse;width: 100%;border-top: 1px solid #DDDDDD;border-left: 1px solid #DDDDDD;margin-bottom: 20px;");
	// tableNew.attr("width","100%");
	// tableNew.attr("border","1");
	// tableNew.attr("cellpadding","10");
	// tableNew.attr("cellspacing","0");
	$('.bodytd').attr('style',"font-size: 12px;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;text-align: left;padding: 7px;")
	$('.bodytdnew').attr('style',"font-size: 12px;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;text-align: right;padding: 7px;color: #222222;font-weight: bold;")
	$('.headtd').attr('style',"font-size: 12px;border-right: 1px solid #DDDDDD;border-bottom: 1px solid #DDDDDD;background-color: #EFEFEF;font-weight: bold;text-align: left;padding: 7px;color: #222222;")
	$('#tableHtml').val($(table).html());
	let data = $(form).serialize();

	$.post('/admin/addorder.php', data, function(data) {
				
	}, 'json');



	$.post(action, data, function(callBack) {
		if (callBack == true) {
			$('#cartBox').remove();
			$('.sendOrder').addClass('active');
			$('html, body').animate({
				scrollTop: 0,
			}, 300);
		};
	}, 'json');
	
	
	
	
	
	
	e.preventDefault();
	return false;
};

$('#sendContactForm').submit(function(e) {
	let form = $(this);
	let action = $(this).attr('action');
	let data = $(this).serialize();
	// Работа с виджетом recaptcha
// 1. Получить ответ гугл капчи
	var captcha = grecaptcha.getResponse();

// 2. Если ответ пустой, то выводим сообщение о том, что пользователь не прошёл тест.
// Такую форму не будем отправлять на сервер.
	if (!captcha.length) {
		// Выводим сообщение об ошибке
		$('#recaptchaError').text('* Вы не прошли проверку "Я не робот"');
	} else {
		// получаем элемент, содержащий капчу
		$('#recaptchaError').text('');
		$.post(action, data, function(response) {
			$(form).find('.responseText').addClass('active');
			$(form).find('input').val('');
			$(form).find('textarea').val('');
		}, 'json');
	}
	e.preventDefault();
	return false;
});