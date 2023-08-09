<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset="utf-8">
	<meta name="viewport content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>

	<!-- need meta stuff - OG img, etc -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header header-bg">
		<inner-column>
			<a href="/home">
				<picture class="home-logo">
					<?php include('images/tfeu-logo.svg'); ?>
				</picture>
			</a>
			<?php include('templates/components/site-menu.php'); ?>

		</inner-column>
	</header>

	<main class="page-content">
		

