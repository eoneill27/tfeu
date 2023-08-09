<?php 
	$heading = get_field('heading') ?: "Single full width heading";
	$landmark = get_field('landmark_text') ?: ""; 
	$description = get_field('description') ?: "This is an optional description of the section";
?>

<single-full class="layout-module">
	<inner-column>		
		<div class='intro'>
			<h2 class='attention-voice'><?=esc_html($heading);?></h2>
			<p><?=$description?></p>
		</div>	

		<?php 

			if(have_rows('image_one')): 
				while(have_rows('image_one')): the_row();
				
					$image = get_sub_field('main_image');

					if ($image) {
	             	$src = $image['url']; 
	            } else {
	               $src = "https://peprojects.dev/images/portrait.jpg";
	            }

					$altText = get_sub_field('alternative_text');
					$caption = get_sub_field('figure_caption');
				?>

				<figure>
					<picture>
						<img src="<?=$src?>" alt='<?=$altText?>'>
					</picture>

					<?php if($caption) { ?>
						<figcaption>
							<p><?=$caption?></p>
						</figcaption>
					<?php } ?>
				</figure>
			<?php 
				endwhile;
			endif;

		?>
	</inner-column>
</single-full>

		
<!--  -->



