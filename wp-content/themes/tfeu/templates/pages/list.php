<?php 
	$heading = getComponent('page-heading'); 
	echo $heading; 
?>

<?php 
// if(getModule('module-loop')) {
// 	include(getModule('module-loop'));
// }

include('/Users/EmilyO/wpGold/wp-content/themes/gold-2023/templates/modules/module-loop.php'); 
?>

<section class="sample-list">
	<inner-column>
		<ul class="sample-grid">
		<?php 
			$parameters = [
				'post_type' => 'sample',
			];

			$query = new WP_Query($parameters);

			while ($query->have_posts() ) : $query->the_post();
				echo "<li class='sample'>";
				getComponent('sample-card');
				echo "</li>";
			endwhile;

			wp_reset_postdata();
		?>
		</ul>
	</inner-column>
</section>

