$(function() {

	var winW = $(window).width();
	var winH = $(window).height();
	var flg = false;
	var scrollpos;

//メニュー
$('.trig').on('click',function(){
	$('.sp-menu').toggleClass('active');
	$('#sp-nav').toggleClass('open');
  if(flg == false) {
    scrollpos = $(window).scrollTop();
    $('body').addClass('fixed').css({'top': -scrollpos});
		$('.hd').addClass('nav-open');
    flg = true;
  } else {
    $('body').removeClass('fixed').css({'top': 0});
		$('.hd').removeClass('nav-open');
    window.scrollTo( 0 , scrollpos );
    flg = false;
  }
});


if($('.shop-pht').length){
	$('.slide').slick({
		autoplay: true,
		arrows: false,
		fade: true,
		zIndex: 100,
		responsive: [{
		breakpoint: 1024,
		settings: {
				centerPadding: '6%'
			}
		}, {
			breakpoint: 801,
			settings: {
				centerPadding: '0%'
			}
		}]
	});
}

//スクロール時のページトップ表示
	if($('.pagetop').length){
		$(".scrl").on('click',function(){
			$('html,body').animate({ scrollTop: $($(this).attr("href")).offset().top }, 'slow','swing');
			return false;
		});
	}

	var fixNav = $('#fix-nav');	
	var topBtn = $('.pagetop');	
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn(500);
		} else {
			topBtn.fadeOut(500);
		}
		if ($(this).scrollTop() > 600) {
			fixNav.addClass('show');
		} else {
			fixNav.removeClass('show');
		}
	});


	$(window).scroll(function () {
		for (var i=0; i<$(".js-show").length; i++) {
			if( $(this).scrollTop() > ($(".js-show").eq(i).offset().top - 2*(winH/3) ) ){
    		$(".js-show").eq(i).addClass('show');
			}
		}
		for (var i=0; i<$(".js-tit").length; i++) {
			if( $(this).scrollTop() > ($(".js-tit").eq(i).offset().top - 2*(winH/3) ) ){
    		$(".js-tit").eq(i).addClass('show');
			}
		}
	});


});


