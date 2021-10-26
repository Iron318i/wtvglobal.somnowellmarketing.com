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

    jQuery(document).ready(function ($) {

	$('.background-video').background({
	    lazy: true
	});

    });

}(jQuery);
