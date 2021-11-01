+function ($) {
    $('body').append('<div id="toTop" class="btn">&nbsp</div>');
    $(window).scroll(function () {
	if ($(this).scrollTop() != 0) {
	    $('#toTop').fadeIn();
	} else {
	    $('#toTop').fadeOut();
	}
    });
    $('#toTop').click(function () {
	$("html, body").animate({scrollTop: 0}, 600);
	return false;
    });

    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.site-header').outerHeight();

    $(window).scroll(function (event) {
	didScroll = true;
    });

    setInterval(function () {
	if (didScroll) {
	    hasScrolled();
	    didScroll = false;
	}
    }, 250);

    function hasScrolled() {
	var st = $(this).scrollTop();

	if (!st) {
	    $('.site-header').addClass('nav-top');
	} else {
	    $('.site-header').removeClass('nav-top');
	}

	if (Math.abs(lastScrollTop - st) <= delta) {
	    return;
	}

	if (st > lastScrollTop && st > navbarHeight) {
	    $('.site-header').removeClass('nav-down').addClass('nav-up');
	} else {
	    if (st + $(window).height() < $(document).height()) {
		$('.site-header').removeClass('nav-up').addClass('nav-down');
	    }
	}

	lastScrollTop = st;
    }


    $('.blog-cats a').on('click', function (e) {
	e.preventDefault();
	$cat = this.hash.substr(1);
	$('.blog-cats a').removeClass('active');
	$(this).addClass('active');
	if ($cat == 'all') {
	    $('.cards-row .col').show();
	} else {
	    $('.cards-row .col').hide();
	    $('.cards-row .' + $cat).show();
	}
    });


    $('.testimonials').owlCarousel({
	dots: true,
	nav: false,
	loop: true,
	margin: 0,
	autoplay: true,
	items: 1
    });

    var owl = $('.logos.owl-carousel');
    owl.owlCarousel({
	lazyLoad: true,
	margin: 0,
	nav: false,
	dots: false,
	loop: true,
	autoplay: true,
	smartSpeed: 1500,
	autoplayTimeout: 1500,
	slideTransition: 'linear',
	responsive: {
	    0: {
		items: 3
	    },
	    576: {
		items: 4
	    },
	    768: {
		items: 5
	    },
	    992: {
		items: 7
	    }
	}
    });

    function roullete() {
	if ($(".roullete-section").length == 0)
	    return;
	let position = $(".roullete-section").offset().top - $(".roullete-section").outerHeight() + 100;
	let scroll = $(window).scrollTop();

	if (scroll > position && $(".roullete-section").hasClass("active") == false) {
	    //if ( scroll > position) {
	    $(".roullete-section").addClass("active");
	    let bingoLeft = Math.floor(Math.random() * ($(".roullete-item-left").length - 0) + 0);
	    let bingoRight = Math.floor(Math.random() * ($(".roullete-item-right").length - 0) + 0); //  let roullete_delay_right_step = 100;
	    //   let roullete_delay_left_step = 100;

	    let roullete_delay_right_step = 0;
	    let roullete_delay_left_step = 0;
	    $(".roullete-item-right").removeClass("move");
	    $(".roullete-item-left").removeClass("move");

	    if ($(".roullete-item-left.bingo").length == 0) {
		$(".roullete-item-left").eq(bingoLeft).addClass("bingo");
	    }

	    if ($(".roullete-item-right.bingo").length == 0) {
		$(".roullete-item-right").eq(bingoRight).addClass("bingo");
	    }

	    let roullete_delay_right = roullete_delay_right_step;
	    $(".roullete-item-right").each(function () {
		$(this).css("animation-delay", roullete_delay_right + "ms");
		roullete_delay_right += 1000 / $(".roullete-item-right").length;
	    });
	    var roullete_delay_left = roullete_delay_left_step;
	    $(".roullete-item-left").each(function () {
		$(this).css("animation-delay", roullete_delay_left + "ms");
		roullete_delay_left += 1000 / $(".roullete-item-left").length;
	    });
	    setTimeout(() => {
		$(".roullete-item-right").each(function () {
		    $(this).addClass("stop");

		    if ($(this).hasClass('bingo')) {
			$(this).addClass("selected");
		    }
		});
		$(".roullete-item-left").each(function () {
		    $(this).addClass("stop");

		    if ($(this).hasClass('bingo')) {
			$(this).addClass("selected");
		    }
		});
	    }, 3500);
	}
    }

    function wtvCalendar() {
	if ($(".wtv-calendar").length == 0)
	    return;
	var interval = 0;
	$(".wtv-calendar").children().each(function (index) {
	    if ($(this).hasClass('show'))
		return;
	    let element = $(this);
	    let offset = element.offset().top;
	    let scroll = $(window).scrollTop();
	    let height = $(window).height() - 100;
	    index += 1;
	    let margin = -40;

	    if (index % 2) {
		margin = 40;
	    }

	    if (scroll > offset - height + margin) {
		if (index % 2) {
		    interval += 400;
		} else {
		    interval += 600;
		}

		setTimeout(() => {
		    element.addClass("show");
		}, interval);
	    }
	});
    } // Roullete animation


    jQuery(document).ready(function ($) {
	$('.background-video').background({
	    lazy: true
	});
	roullete();
	wtvCalendar();

	$(window).scroll(function () {
	    roullete();
	    wtvCalendar();
	});
    });
}(jQuery);
