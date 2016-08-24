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
			<div class="border-wrap">
			<?php the_title('<h2 class="small-title">', '</h2>');  ?>
			<?php the_content();?>
			</div>
			<?php endwhile;?>
		</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>