<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<title>Schillerskas Elevkår</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/coin-slider/coin-slider-styles.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jq.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/coin-slider/coin-slider.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/functions.js"></script>
</head>
<body>
<div id="wrapper">
	<div class="container">
		<div class="navbar navbar-inverse navbar-fixed-top mh40">
			<div class="navbar-inner mh40">
				<div class="container">
					<img class="logga brand" src="<?php echo get_template_directory_uri();?>/img/logga2.png">
					<p class="brand"><a id="brand" href="<?php echo home_url(); ?>">Schillerskas Elevkår</a></p>
					<ul class="nav">
						<li><a href="<?php echo home_url(); ?>">Hem</a></li>
						<li><a href="<?php echo post_permalink(2); ?>">Bli Medlem</a></li>
						<li><a href="<?php echo post_permalink(29); ?>">Kontakt</a></li>
						
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">
								Verksamhet
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo post_permalink(224); ?>">Historia</a></li>
								<li><a href="<?php echo post_permalink(226); ?>">Organisation</a></li>
								<li><a href="<?php echo post_permalink(228); ?>">Styrelsen</a></li>
								<li><a href="<?php echo post_permalink(230); ?>">Protokoll</a></li>
								<li><a href="<?php echo post_permalink(232); ?>">Stadgar</a></li>
								<li><a href="<?php echo post_permalink(234); ?>">Förmåner</a></li>
							</ul>
						</li>
						<li><a href=" <?php echo post_permalink(193); ?> ">Galleri</a></li>
						<li><a href="<?php echo post_permalink(127); ?>">Schema</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div>