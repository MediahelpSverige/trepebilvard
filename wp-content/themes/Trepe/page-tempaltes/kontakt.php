<?php

/*

Template name: kontakt

*/

get_header();

?>

<style type="text/css">



.acf-map {

	width: 100%;

	height: 400px;

	border: #ccc solid 1px;

	margin: 20px 0;

}



/* fixes potential theme css conflict */

.acf-map img {

   max-width: inherit !important;

}



</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">

(function($) {



/*

*  new_map

*

*  This function will render a Google Map onto the selected jQuery element

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	$el (jQuery element)

*  @return	n/a

*/



function new_map( $el ) {

	

	// var

	var $markers = $el.find('.marker');

	

	

	// vars

	var args = {

		zoom		: 16,

		center		: new google.maps.LatLng(0, 0),

		mapTypeId	: google.maps.MapTypeId.ROADMAP

	};

	

	

	// create map	        	

	var map = new google.maps.Map( $el[0], args);

	

	

	// add a markers reference

	map.markers = [];

	

	

	// add markers

	$markers.each(function(){

		

    	add_marker( $(this), map );

		

	});

	

	

	// center map

	center_map( map );

	

	

	// return

	return map;

	

}



/*

*  add_marker

*

*  This function will add a marker to the selected Google Map

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	$marker (jQuery element)

*  @param	map (Google Map object)

*  @return	n/a

*/



function add_marker( $marker, map ) {



	// var

	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );



	// create marker

	var marker = new google.maps.Marker({

		position	: latlng,

		map			: map

	});



	// add to array

	map.markers.push( marker );



	// if marker contains HTML, add it to an infoWindow

	if( $marker.html() )

	{

		// create info window

		var infowindow = new google.maps.InfoWindow({

			content		: $marker.html()

		});



		// show info window when marker is clicked

		google.maps.event.addListener(marker, 'click', function() {



			infowindow.open( map, marker );



		});

	}



}



/*

*  center_map

*

*  This function will center the map, showing all markers attached to this map

*

*  @type	function

*  @date	8/11/2013

*  @since	4.3.0

*

*  @param	map (Google Map object)

*  @return	n/a

*/



function center_map( map ) {



	// vars

	var bounds = new google.maps.LatLngBounds();



	// loop through all markers and create bounds

	$.each( map.markers, function( i, marker ){



		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );



		bounds.extend( latlng );



	});



	// only 1 marker?

	if( map.markers.length == 1 )

	{

		// set center of map

	    map.setCenter( bounds.getCenter() );

	    map.setZoom( 16 );

	}

	else

	{

		// fit to bounds

		map.fitBounds( bounds );

	}



}



/*

*  document ready

*

*  This function will render each map when the document is ready (page has loaded)

*

*  @type	function

*  @date	8/11/2013

*  @since	5.0.0

*

*  @param	n/a

*  @return	n/a

*/

// global var

var map = null;



$(document).ready(function(){



	$('.acf-map').each(function(){



		// create map

		map = new_map( $(this) );



	});



});



})(jQuery);

</script>

<section class="section-white single">

	<div class="container">
	<div class="row">
	<h3 class="title">Välkommen att kontakta oss!</h3>
	</div>
	<div class="row" id="kontakt-row">
	<div class="kontakt-info">

		<?php 

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post(); 

					//

					// Post Content here

					the_content();

					//
					?>
					<div class="">

						<ul class="left-listing">
								<li class="clearfix"><label><i class="fa fa-phone"></i>Telefon: </label><label><?php the_field('telefon'); ?></label></li>
								<li class="clearfix"><label><i class="fa fa-envelope"></i>E-post: </label><label><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></label></li>
							</ul>
							<ul class="left-listing">
								<li class="clearfix"><label><i class="fa fa-home"></i>Adress: </label><label><?php the_field('adress');?></label></li>
								<li class="clearfix"><label><i class="fa fa-envelope"></i>Postnr: </label><label><?php the_field('postnummer');?></label></li>
								<li class="clearfix"><label><i class="fa fa-building"></i>Postort: </label><label><?php the_field('postort');?></label></li>
							</ul>

					</div>

					<?php

				} // end while

			} // end if

?>

<?php $query8 = new WP_Query(array( 'post_type' => 'arbetare', 'post_per_page' => -1) );

//print_r($query8);

					  while ( $query8->have_posts() ) : $query8->the_post(); ?>



					  <div class="coworker">



		<?php the_title('<h4>', '</h4>');  ?>



		<?php the_content();?>

		</div>

	    <?php endwhile; wp_reset_postdata();?>

</div>

<div class="kontaktformular">

<h5>Använd formuläret om du vill meddela oss något</h5>

	<?php the_field('kontaktformular');?>

</div>
					</div>

	<div class="map">
		<h3 class="title">Här finns vi</h3>

	<?php 



$location = get_field('karta');



if( !empty($location) ):

?>

<div class="acf-map">

	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

</div>

<?php endif; ?>

<?php the_field('kart_text'); ?>



	</div>

	</div>

</section>





<?php get_footer(); ?>