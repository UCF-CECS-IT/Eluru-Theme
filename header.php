<?php

$nav = wp_nav_menu([
    'theme_location' => 'primary',
	'menu' => 'header-menu',
    'menu_class' => 'clearfix',
    'container' => 'div',
	'menu_id' => 'nav',
	'echo' => false,
]);




?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Transportation Econometric Modelling Group at UCF - Prof. Naveen Eluru's Research Page" />
	<meta name="keywords" content="Transportation, Univeristy of Central Florida, Discrete Choice Models, Econometric Models in Transportation" />
	<meta name="author" content="Naveen Eluru" />
	<meta name="google-site-verification" content="9NgpihH83QIGis1Stu25scEnTreig_StmEp97abRVlg" />

	<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' />

	<title><?php bloginfo( 'name' ); ?></title>

	<?php wp_head(); ?>


</head>

<body>
	<div id="wrapper960" class="clearfix">
		<div id="toplinks">
			<ul class="toplinks_links">
				<li><a href="http://www.ucf.edu">University of Central Florida</a></li>
				<li><a href="http://www.cece.ucf.edu/">Civil, Enviornmental and Construction Engineering</a></li>
				<li><a href="<?php site_url(); ?>">Home</a></li>
			</ul>
		</div>

		<div id="header" class="clearfix shadow">
			<div id="sitetitle" class="clearfix">
				<h1><a href="<?php site_url(); ?>">Transportation Econometric Modelling Group (TEMG) at UCF</a></h1>
			</div>

			<div>
				<?php echo $nav; ?>
			</div>
		</div>
