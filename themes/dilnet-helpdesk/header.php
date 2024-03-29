<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header">
			  <div id="banner">
				  <div id="inner-header" class="wrap clearfix">
					  <p id="logo">
					    <a href="<?php echo home_url(); ?>" rel="nofollow">
					      <img src="<?php echo get_template_directory_uri(); ?>/library/images/title.png">
					    </a>
					  </p>

					  <!-- if you'd like to use the site description you can un-comment it below -->
					  <?php // bloginfo('description'); ?>

				  </div> <!-- end #inner-header -->
        </div> <!-- end banner -->

			  <div id="inner-header" class="wrap clearfix">
		      <button id="nav_hide" >
		        <img src="<?php echo get_template_directory_uri(); ?>/library/images/button.png">
				  </button>
				</div>

				<div id="inner-header" class="wrap clearfix">
			    <nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
				</div>
			</header> <!-- end header -->
