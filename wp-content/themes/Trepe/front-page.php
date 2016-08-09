<?php 



get_header();

?>



<section class="banner" style="background-image:url('/html/img/banner4-op.jpg')">

	<div class="container">

	<div id="bannerSlides" class="banner-wrap owl-carousel" >



	<?php $query8 = new WP_Query(array( 'post_type' => 'banner', 'post_per_page' => -1) );

//print_r($query8);

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>

					  <div class="item banner-text-box">





		<?php the_title('<h3>', '</h3>');  ?>



		<?php the_excerpt();?>



		<a class="btn" href="<?php the_permalink(); ?>">Läs mer</a>

		<div class="backgroundinfo" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')"></div>



		</div>

	    <?php endwhile;?>

	    <?php wp_reset_postdata(); ?>

	</div>

	</div>

</section>



<section class="welcome">

<div class="container">

<div class="row">

<h1 id="welcome-title">Välkommen till Trepe Bilvård</h1>
</div>
<div class="row">

<div class="welcome-content">

<div class="col-md-8 col-sm-8">

	<div class="welcome-text">

			<?php 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post(); 

					//

					// Post Content here

					the_content();

					//

				} // end while

			} // end if

?>


</div>

<div class="tjanst-desc">

	<h4>Behöver du hjälp? Se vilka tjänster vi erbjuder här!<span><i class="fa fa-info-circle" aria-hidden="true"></i></span></h4>

</div>

	<div class="dropdown">

  <button class="dropbtn"><h5>Våra tjänster... </h5><i class="fa fa-angle-down"></i></button>

  <div class="dropdown-content">



  		<?php /*Get children of page*/



		$args = array(


	'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'page',
	'post_mime_type'   => '',

	'post_parent'      => '8',

	'author'	   => '',
	'post_status'      => 'publish',

	'suppress_filters' => true 


);



$posts_array = get_posts( $args ); 




$myposts = get_posts( $args ); ?>



<?php foreach ( $myposts as $post ) : setup_postdata( $post ); ?>



		<a href="<?php echo home_url(); ?>/begar-offert/?subject=<?php the_title(); ?>"><?php the_title(); ?></a>


<?php endforeach;  ?>



<?php wp_reset_postdata();?>


  </div>

</div>

					

</div>

<div class="col-md-4 col-sm-4">

				<div class="facebook-wrap">
				<h4>Gilla oss på facebook</h4>

				<?php the_field('facebook',4);?>

		</div>

</div>
<div class="clearfix"></div>
</div>
</div>
</div>

</section>

<section class="search">

	<div class="container">

		<div class="row"><h3 class="search-title title">Sök upp oss i följande tjänster<i class="fa fa-calendar" aria-hidden="true"></i></h3></div>


<div class="row">
		<div class="search-wrap">



			<div class="search-item-wrap">

			<div class="service-item">

			<div class="service-image">

			<a href=""><img src="<?php bloginfo('template_url');?>/img/carly-logo-black.png"></a></div>

			<a class="btn " href="http://www.carly.se/verkstad/trepe-bilv%C3%A5rd-autoexperten/" style="box-shadow: rgb(13, 68, 121) 0px 4px;">Boka tid</a>

		</div>

		<div class="service-item">

			<div class="service-image"><a href=""><img src="http://trepebilvard.se.mediahelpcrm.se/html/img/lasingoo.png"></a></div>

			<a class="btn " href="https://www.lasingoo.se/bilverkstad/Uppsala/Autoexperten-Bilverkstad--S%C3%A4bygatan-7/d-180958" style="box-shadow: rgb(13, 68, 121) 0px 4px;">Boka tid</a>

		</div>

		<div class="service-item">

			<div class="service-image"><a href=""><img src="http://trepebilvard.se.mediahelpcrm.se/html/img/autobutler-logo.png"></a></div>

			<a class="btn " href="https://www.autobutler.se/jobs/new?area_id=17204&mechanic_id=161047" style="box-shadow: rgb(13, 68, 121) 0px 4px;">Boka tid</a>

		</div>

		</div>

		<div class="clear"></div>

		</div>
		</div>

	</div>

</section>

<section class="offers">



<div class="container">

	

			<div id="offers" class="owlCarousel owl-carousel owl-theme owl-loaded">

</div>

			</div>

</section>

<!--

	<section class="section-blue">

		<div class="container"><div class="main-text-wrap"><i class="fa fa-clock-o"></i><h2>Vårt kontor i Bålsta har öppet vardagar 08:30-16:30.</h2></div></div>

	</section>

-->



<script type="text/javascript">

	$(document).ready(function(){

			var h = $('.banner').height();



			$('.banner').prepend('<div class="overlay">');

			$('.banner').append('</div>');

			console.log(h);



	});

</script>



<?php get_footer(); ?>