$(document).ready(function () {	

	function toggleMenu() {
		$(".hamburger").toggleClass('is-active');
		$("nav").toggleClass('active');
	}
	$(".hamburger").click(function () {
		toggleMenu();
	});
	$(window).on('resize', function () {
		var width = $(this).width();
		if (width > 768) { $(".hamburger").removeClass('is-active'); $("nav").removeClass('active'); }
	});

	var boxBackTop = $("#box-back-top");
	boxBackTop.fadeOut(0);
	$(window).scroll(function () {
		var positionCurrent = $(window).scrollTop();
		if (positionCurrent < 500) { boxBackTop.fadeOut(300); }
		else { boxBackTop.fadeIn(300); }
	});

	boxBackTop.on('click', function () {
		$("html, body").animate({scrollTop: 0}, 300);
	});
	if (document.getElementById("splide") !== null) {
		var splide = new Splide( '.splide', {
			perPage: 3,
			perMove: 1,
			rewind : true,
			pagination: false,
			breakpoints: {
				992: {
					perPage: 2,
				},
				768: {
					perPage: 1.5,
					focus: 'center',
				},
				576: {
					perPage: 1.2,
					focus: 'center',
					arrows: false,
				}
			}
		} );
		splide.mount();
	}

	var boxLight = $("#box-light");
	function setCookie(nome, valor, day) {
		const d = new Date();
		d.setTime(d.getTime() + (day*24*60*60*1000));
		let expires = "expires="+ d.toUTCString();
		document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
	}
	boxLight.on('click', function () {
		if ($('body').hasClass('dark')) { $('body').removeClass('dark'); setCookie('dark', false, 10); }
		else { $('body').addClass('dark'); setCookie('dark', true, 10); }
		
	});
});