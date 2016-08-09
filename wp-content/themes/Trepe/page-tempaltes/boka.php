<?php

/*

Template name: boka

*/

get_header();

?>

<!--

<section class="banner boka-banner" style="background-image:url('http://trepebilvard.se.mediahelpcrm.se/html/img/sparks.jpg')">

	<div class="container">

	<div class="banner-wrap" >





		<div class="boka-banner-text-box">

		</div>

	</div>

	</div>

</section>
-->
<!--

<section class="boka">



<div class="container boka-cont">

<div class="boka-nav">

	<ul>

		<li>1. Generell info</li>

		<li>2. Välj tid</li>

		<li>3. Dina uppgifter</li>

		<li>4. Bekräfta</li>

	</ul>

</div>

	<div class="boka-wrap">



	<form class="boka">

		<div class="boka-field">

			<label><h3>Önskad verkstadstjänst</h3></label>

			<input type="text" id="service">

		</div>

		<div class="boka-field">

		<label><h3>Vilket fordon?</h3></label>

		<input type="text" id="service">

		</div>

		<div class="boka-field">

		<label><h3>Övrig information</h3></label>

		<input type="textarea" id="service">

		<div class="boka-field">

		<input type="submit" class="red-btn" value="GÅ VIDARE TILL NÄSTA STEG">

	</form>

		

		</div>

	</div>



</section>

-->



<section class="section-white single">

<div class="container-wrap">

	<div class="container">

		<div class="row"><div class="col-md-12"><h2 class="title">Varmt välkomna att boka tid här nedan</h2></div></div>
<div class="row">
	<div class="boka-wrap col-md-8 col-sm-8">
	<div class="info-section" id="bil">
	<h4 class="sub-title">Information om bilen</h3>
		<input type="text" name="Bilmärke" placeholder="Välj bilmärke">
		<input type="text" name="Modell" placeholder="skriv in modell">
		<input type="text" name="Motorstorlek/variant" placeholder="Motorstorlek/variant">
		<input type="text" name="Tillverkningsår" placeholder="2016">
		<select>
			<option value="Bensin"></option>
			<option value="Bensin"></option>
			<option value="Bensin"></option>
			<option value="Bensin"></option>
			<option value="Bensin"></option>
		</select>
		<div class="clearfix"></div>
	</div>

	<div class="info-section" id="tjanst">
		<h4 class="sub-title">Vilken tjänst är du intresserad av?</h4>
		<?php $args = array(
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
	'post_type'        => 'tjanst',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args ); 
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>
<?php endforeach; 
wp_reset_postdata();?>

</ul>
		<ul>
			<li>
			<h5>Däckservice</h5>
			<ul class="service-sub-menu">
				<li></li>
			</ul>
			</li>
		</ul>
		<div class="clearfix"></div>
	</div>




	<div class="info-section" id="person">
	<h4 class="sub-title">Dina uppgifter</h4>
		<div class="col-md-6 col-sm-6">
		<input type="text" name="Bilmärke" placeholder="Välj bilmärke">
		<input type="text" name="Modell" placeholder="skriv in modell">
		<label>Jobbet ska utföras tidigast</label>
		<input type="text" name="doneEarly" placeholder="">
		</div>
		<div class="col-md-6 col-sm-6">
		<input type="text" name="Bilmärke" placeholder="Välj bilmärke">
		<input type="text" name="Modell" placeholder="skriv in modell">
		<h5>Önskemål om tid</h5>
		<label>Jobbet ska utföras senast</label>
		<input type="text" name="DoneLate" placeholder="">
		</div>
		<div class="col-sm-12 col-md-12">
			<label>Meddelande till verkstaden. Vänligen specificera så noggrant du kan vad du önskar ha hjälp med på bilen gällande service & reparation.</label>
			<textarea></textarea>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="info-section" id="submit">
	<div class="col-md-12">
	<input class="btn" type="submit" name="Begär offert" value="Begär offert">
	</div>
	</div>

		<?php
		/* 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post(); 

					//

					// Post Content here

					//the_title('<h1 class="boka-title">','</h1>');

					the_content();

					//

				} // end while

			} // end if
*/
?>

</div>
</div>

	</div>

	</div>

</section>



<?php get_footer(); ?>