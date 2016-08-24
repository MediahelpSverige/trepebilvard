<?php
/*
Template name: tips
*/
get_header();
?>


<section class="section-white single">
	<div class="container">
		<div class="container-wrap">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						//print_r($post);
						//
						// Post Content here
						the_content();
						//
					} // end while
				} // end if
			?>
			<div class="tips-wrap">
			<?php $query8 = new WP_Query(array( 'post_type' => 'tips', 'post_per_page' => -1) );
			//print_r($query8);
			while ( $query8->have_posts() ) : $query8->the_post(); ?>
			<div class="tips-item">
			<div class="border-wrap">
			<?php the_title('<h2 class="small-title">', '</h2>');  ?>
			<?php the_content();?>
			<?php the_post_thumbnail('large'); ?>
<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<!--<a href="#" class="print">skriv ut</a>-->
			</div>
			</div>
			<?php endwhile;?>
		</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	/*
	$(document).ready( function(){

		$('.tips-item .print').click( function(){

			
			var print = $(this).parent()[0]

			$('.tips-wrap').printElement({printMode: 'popup'});
		})

		//$('').printElement();
	})*/
</script>
<?php
get_footer();
?>