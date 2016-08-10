<?phpget_header();?><section class="slider">	<div class="container">		<div class="row">			<div class="col-md-12">				<div class="swiper-container">					<div class="swiper-wrapper" >						<?php $query8 = new WP_Query(array( 'post_type' => 'banner', 'post_per_page' => -1) );						//print_r($query8);						while ( $query8->have_posts() ) : $query8->the_post(); ?>						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>						<div class="swiper-slide" style="background-image:url(<?php echo $url;?>);">							<div class="banner-text-box animated">								<?php the_title('<h3>', '</h3>');  ?>								<?php the_content();?>								<a class="btn-blue" href="<?php the_permalink(); ?>">Läs mer</a>															</div>							<div class="overlay"></div>						</div>						<?php endwhile;?>						<?php wp_reset_postdata(); ?>					</div>					<div class="swiper-pagination"></div>										<div class="swiper-button-prev"></div>					<div class="swiper-button-next"></div>				</div>			</div>		</div>	</div></section><section class="welcome">	<div class="container">		<div class="row">			<div class="col-md-12">				<h1 id="welcome-title">Välkommen till Trepe Bilvård</h1>			</div>			<div class="col-md-8 col-sm8">								<div class="welcome-content">					<div class="border-wrap">						<div class="welcome-text section">							<?php							if ( have_posts() ) {								while ( have_posts() ) {									the_post();							//							// Post Content here									the_content();							//							} // end while							} // end if							?>						</div>						<div class="newsletter section">							<h4 class="small-title">Tips och tricks</h4>							<p>Vi lanserar strax vår tips och tricks-section. Där kommer du kunna läsa om alla möjliga tips som vår kunniga personal tagit fram</p>						</div>						<div class="newsletter section">							<h4 class="small-title">Nyhetsbrev</h4>							<p>Vi skickar ut ett nyhetsbrev varje vecka med Tips och tricks kring skötsels av er bil, många erbjudanden exklusiva erbjudanden, och mycket, mycket mer.</p>							<p>Klicka på knappen här nedan för att anmäla dig till nyhetsbrevet och börja få all möjlig nyttig information innom kort!</p>							<a class="btn-blue" href="#">Nyhetsbrev kommer innom kort</a>						</div>					</div>		<div class="row">			<div class="col-md-12">				<h3 class="search-title title">Sök upp oss i följande tjänster<!--<i class="fa fa-calendar" aria-hidden="true"></i>--></h3>			</div>		</div>		<div class="row">			<div class="col-md-12">				<div class="search-wrap">					<div class="search-item-wrap">						<div class="service-item">							<div class="service-image">								<a href=""><img src="<?php bloginfo('template_url');?>/img/carly-logo-black.png"></a></div>															</div>							<div class="service-item">								<div class="service-image"><a href=""><img src="<?php bloginfo('template_url');?>/img/lasingoo.png"></a></div>															</div>							<div class="service-item">								<div class="service-image"><a href=""><img src="<?php bloginfo('template_url');?>/img/autobutler-logo.png"></a></div>															</div>						</div>						<div class="clear"></div>					</div>				</div>			</div>				</div>				<!--<div class="row">										<div class="col-md-6">						<div class="link-item-wrap">							<div class="top-blue">								<img src="http://trepebilvard.se.mediahelpcrm.se/wp-content/uploads/2016/05/car_info.png">							</div>							<div class="bot-blue">								<h4 class="link-item-title">Tips och Tricks</h4>								<p>Läs om tips och tricks som vår kunniga personal tagit fram</p>								<i class="material-icons">trending_flat</i>							</div>													</div>					</div>					<div class="col-md-6">						<div class="link-item-wrap">							<div class="top-blue">								<i class="fa fa-comment-o" aria-hidden="true"></i>							</div>							<div class="bot-blue">								<h4 class="link-item-title">Omdömen</h4>								<p>Läs mer och få en överblick över vad våra kunder tycker om oss</p>								<i class="material-icons">trending_flat</i>							</div>						</div>					</div>				</div>-->			</div>			<div class="col-md-4 col-sm-4">				<div class="border-wrap">					<div class="sidebar-offer">						<h4 class="small-title">Veckans erbjudande</h4>						<div class="offerimg">												<img src="<?php bloginfo('url');?>/wp-content/uploads/2016/05/batteri.jpg">						<h4>TESTA BATTERIET GRATIS</h4>						</div>						<p>Erbjudande gäller t.o.m 31/1-16							Statistik från tyska ADAC visar på att							Vart...							3:e motorstopp beror på ett dåligt startbatteri						(Ring 018-155605 och boka tid)</p>						<a class="btn-blue small" href="<?php the_permalink(); ?>">Läs mer</a>					</div>					<div class="facebook-wrap">						<h4 class="small-title">Gilla oss på facebook</h4>						<?php the_field('facebook',4);?>					</div>				</div>			</div>			<div class="clearfix"></div>		</div>	</div></section><!--<section id="ratings">		<div class="container">				<div class="row">						<div class="section-wrap">								<h3>Några av våra nöjda kunder</h3>								<div class="row">										<div class="col-md-6">												<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fbkreseblogg%2Fposts%2F10153558252353037%3A0&width=500" width="500" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>										</div>										<div class="col-md-6">												<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fdanne.helmet%2Fposts%2F951151908292651%3A0&width=500" width="500" height="316" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>										</div>								</div>						</div>				</div>		</div></section>-->	<section class="offers">		<div class="container">			<div id="offers" class="owlCarousel owl-carousel owl-theme owl-loaded">			</div>		</div>	</section>	<!--		<section class="section-blue">				<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>		</section>	-->	<script type="text/javascript">		$(document).ready(function(){				var h = $('.banner').height();			$('.banner').prepend('<div class="overlay">');			$('.banner').append('</div>');			console.log(h);		});	</script>	<?php get_footer(); ?>