<?php get_header(); ?>

<?php 

	if (is_page ('home')) {
		include('templates/pages/home.php');
	}

	// Custom post type Items 
	// For each post Item, run this loop on the List page
	// include detail-card for each Item
	// this populates the List page

	if (is_page ('list')) {
		$parameters = array(
			'post_type' => 'items',
		);

		$query = new WP_Query($parameters);

		while ($query->have_posts()) : $query->the_post();
			include('templates/components/detail-card.php');
		endwhile;

		wp_reset_postdata();
	}

	// display details page (list-details) for each Item in
	// custom posts Items

	if (is_singular('item')) { 
		include ('templates/pages/list-details.php');
	}

	if (is_404()) {
		include('templates/pages/page-not-found.php');
	}
?>

<?php get_footer(); ?>
