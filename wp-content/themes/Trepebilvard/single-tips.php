<?php
get_header();
?>
<section class="section-white single">
	<div class="container">
	<div class="tips-wrap">
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) { ?>

						<div class="tips-item">
						<?php 
						the_post();
						//print_r($post);
						//
						// Post Content here
						the_post_thumbnail('large');
						the_title('<h2>','</h2>');
						the_content();
						//?>
						<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><a class="print" href='javascript:window.print();'><i class="fa fa-print" aria-hidden="true"></i>Skriv ut</a>
						</div>
						<?php
					} // end while ?>

					</div>
				 <?php } // end if
			?>

		<div class="row">
			<div class="col-md-12">
				<div class="offert"></div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>