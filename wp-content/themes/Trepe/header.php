<!DOCTYPE html>

<html>

<head>

	<title><?php bloginfo ( 'name' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Roboto:400,700|Lato:300' rel='stylesheet' type='text/css'>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link rel="icon" href="<?php bloginfo('template_url')?>/img/icon.png">



	<link href='<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.css' rel='stylesheet' type='text/css'>

	<link href='<?php bloginfo( 'template_url' ); ?>/css/custom.css' rel='stylesheet' type='text/css'>

	<link href='<?php bloginfo( 'template_url' ); ?>/css/responsive.css' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/owl.carousel.min.js"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.5&appId=911661125591162";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

<header>

<div class="top-header">

	<div class="container">

	<div class="left-field">

		<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo( 'template_url' ); ?>/img/autoexperten-verkstad-logo.png"></a>



	</div>

	<div class="center-field"><div class="searchbar"><?php get_search_form(); ?></div></div>

	<div class="right-field">

	<div class="contact">

		<h4><i class="fa fa-envelope-o"></i> Mail:<a href="mailto:info@trepebilvard.se"> info@trepebilvard.se</a></h4>

		<h4><i class="fa fa-mobile"></i> Telefon: 018 - 155 605</h4>

		<h4><i class="fa fa-clock-o"></i> Öppettider: 08.00 - 17.00</h4>

	</div>

		<img src="<?php bloginfo( 'template_url' ); ?>/img/ackrediterad.jpg">

	</div>

	</div>

</div>

<div class="bottom-header">

	<div class="container">

			<div class="menu-toggle">

			<i class="fa fa-bars"></i>

		</div>

		<nav>

		<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu', 'container_class' => 'menu-main-menu-container') ); ?>

			<a class="boka-btn" href="<?php bloginfo( 'url' ); ?>/boka-tid"><i class="fa fa-check-square-o"></i> Boka tid</a>

		</nav>



	</div>

</div>

</header>