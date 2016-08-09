<footer>

	<div class="container">

		<div class="footer-info">
		<div class="left-field">
			<h3 class="footer-title">Begär offert</h3>
			<p> Vi hjälper till med en bred mäbgt tjänster. Fyll i vårt formulär och begär en generell offert så återkommer vi till dig så fort vi kan</p>
			<a class="btn" href="<?php bloginfo('url');?>/offert">Begär offert</a>
		</div>
		<div class="middle-field">
			<h3 class="footer-title">Sidkarta</h3>
			<?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'menu_class' => 'footer-nav-menu', 'container_class' => 'footer-menu-container') ); ?>

		</div>
		<div class="right-field">
			<h3 class="footer-title">Kontakt</h3>
			<ul>
				<li><span><i></i>Adress:</span><span>Säbygatan 7</span></li>
				<li><span>Postnummer:</span><span> 75323</span></li>
				<li><span><i></i>Postort</span><span>Uppsala</span></li>
				<li><span><i></i>Telefon:</span><span> 018-155605</span></li>
				<li><span><i></i>Epost:</span><span><a href="mailto:info@trepebilvard.se">info@trepebilvard.se</a></span></li>
				<li><span>Orgnr<i></i></span><span>5568048119</span></li>
				<li><span>Momsnr<i></i></span><span>SE556804811901</span></li>
			</ul>
			<div class="social-row">
				
			</div>
		</div>
		<div class="clearfix"></div>

		</div>



	</div>

	<div class="footer-bottom">

		<div class="container">
			<div class="footer-bottom-cont">
					<p><i class="fa fa-copyright" aria-hidden="true"></i> Trepe Bilvård AB 2016</p>
			</div>
		</div>
		
	</div>


	<script type="text/javascript">



		$(document).ready(function(){





			var w = $(window).innerWidth();

			console.log(w);







			if( w > 768){



				$('.menu-item-has-children').hover(

					function(){

						$(this).children('.sub-menu').slideDown(200,stop()); 

					},

					function(){

						$(this).children('.sub-menu').slideUp(200,stop()); 

					}

					);

				function stop(){

					$('.sub-menu').stop(true, true);

				}



	//RESPONSIVE HERE

}else{

	$('.navbar-toggle').click(function(){

		$('#menu-primary-menu').slideToggle();





	});



}



$('.menu-toggle').click(function(){

	$('.nav-menu').slideToggle();

});





headerpos = $('.bottom-header').offset();

var headertop  = headerpos.top;



var headerstartpos = headerpos.top;



var h = $();



var clicked = false

var timeout, clicker = $('.btn');



clicker.mousedown(function(){

	console.log(this);

	var e = $(this);

	$(this).css({

		'top':'4px',

		'box-shadow':'none',

	});

	timeout = setInterval(function(){

		console.log('down');

		$(this).css({

			'top':'4px',

			'box-shadow':'none',

		});

	}, 500);



	return false;

});



$(document).mouseup(function(){

	if ($('.btn').mouseover()) {

		$(clicker).css({

			'top':'initial',

			'box-shadow':'0 4px #0D4479',

		});

	}else{





		$(clicker).css({

			'top':'0px',

			'box-shadow':'0 6px #0D4479',

		});



	}

	clearInterval(timeout);



	return false;

});



$('.btn').mouseover(function () {

	$(this).css({

		'top':'initial',

		'box-shadow':'0 4px #0D4479',

	});

});





$('.btn').mouseout(function () {

	clearInterval(timeout);

	$(this).css({

		'top':'initial',

		'box-shadow':'0 6px #0D4479',

	});

	return false;

});



var image = $('.banner').css('background-image');

console.log(image);



var homeslider = $("#bannerSlides");



homeslider.owlCarousel({



	items:1,

	loop:true,

	autoplay:true,

	autoplaySpeed:4000,

	autoplayTimeout:4000,

	autoplayHoverPause:true,

	animateOut: 'fadeOut',



});





homeslider.on('changed.owl.carousel', function(event) {





	var image = $('.active .backgroundinfo').css('background-image');



	$(".banner").fadeOut(1000, function() {



		$('.banner').css({

			'background-image':image,

		});



	}).fadeIn(800);



})







var owl = $('#offers');



owl.owlCarousel({



	items : 1,

	slideSpeed : 400,

	autoplay : 6000,

	loop: true,

	nav: true,

	navigation: true,

	autoplayHoverPause: false,

	navText: [

	"<i id='left-nav' class='fa fa-angle-left'></i>",

	"<i id='right-nav' class='fa fa-angle-right'></i>"

	],



});











$(window).scroll(function(){



	var top = $(window).scrollTop()

	headerpos = $('.bottom-header').offset();

	var headertop  = headerpos.top;



	console.log(top);

	console.log(headerstartpos);







	if (top >= headerstartpos) {

		$('.bottom-header').addClass('fixed')

	}else if(top < headerstartpos){

		console.log('notfixed');

		$('.bottom-header').removeClass('fixed')

	}



});





});

</script>



<?php wp_footer();?>

</footer>



</body>

</html>