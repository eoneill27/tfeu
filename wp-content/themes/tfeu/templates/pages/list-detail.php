<!-- ACF custom blocks method -->

<section class="page-section list-details">
	<inner-column>

		<div class='intro'>
			<h2 class='attention-voice'><?=the_field('list_name');?></h2>
		</div>	

	</inner-column>
	
		<?php // ACF uses the old classic post content box to store the details of the content and how to display them ?>
		<?php the_content(); ?>
		<?php // which feels strange and counter intuitive! But if you want your blocks to show up... then this is how ?>

	
</section>

<!-- classic editor method -->

<?php
	$name = get_field('name');
	$designers = get_field('designer');
	$price = get_field('price');
	$photo = get_field('photo');
	$type = get_field('type');
	$year = get_field('year');
	$manufacturer = get_field('manufacturer');
	$description = get_field('description');
	$formattedDescription = wpautop($description, true);
	$room = get_field('room');

	if ($photo) {
		$photo = $photo["url"];
	} else {
		$photo = "https://peprojects.dev/images/square.jpg";
	}

	$materials = get_the_terms ( get_the_ID(), 'material' ); 

	
?>

<section class="page-section item-details">
	<inner-column>
		<div class="detail-photo">
			<picture class="item-image">
				<img src="<?=$photo?>" alt="">
			</picture>
		</div>

		<div class="detail-specs">

			<h1 class="attention-voice"><?=$name?></h1>
			<h2 class="info-voice">$<?=$price?></h2>
			<h2 class="reading-voice">

			<?php
				
				if($designers) { ?>
				<ul>
				   <?php foreach( $designers as $designer ) {
						$permalink = get_permalink( $designer->ID );
						$title = get_the_title( $designer->ID );
						$custom_field = get_field( 'field_name', $designer->ID );
					?>
					<li>
					   <a href="<?=$permalink?>">
					   	<?=$title?>
					   </a>
					</li>
					<?php } ?>
				</ul>
			<?php } ?>
			
			<div class="detail-disclosure">
				<hr>
				<details>
					<summary class="strong-voice">Description</summary>
					<p class="reading-voice description"><?=$formattedDescription?></p>
				</details>
				<hr>
				<details>
					<summary class="strong-voice">Details</summary>
					<ul>
						<?php if($year) { ?>
						<li><span class="strong-voice">Year:</span> <?=$year?></li>
						<?php } ?>
						<?php if($manufacturer) { ?>
						<li><span class="strong-voice">Manufacturer:</span> <?=$manufacturer?></li>
						<?php } ?>
						
						<li><span class="strong-voice">Material:</span> 
							<?php 

								if ($materials) {

									// $materialArray = array();

								foreach ($materials as $material) {
									$materialArray[] = $material->name;
								}

								$materialList = implode(", ", $materialArray);
								}
							?>

							<?=$materialList?>
						</li>
					</ul>
				</details>
				<hr>
			</div>
		</div>

	</inner-column>
</section>