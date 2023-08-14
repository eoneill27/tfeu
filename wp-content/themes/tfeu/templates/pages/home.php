<section class="page-section hero-page">
	<!-- <inner-column> -->

	<!-- </inner-column> -->
</section>

<section class="home-content">
	<inner-column>
		<?php
			

			$eventName = get_field('event_name');
			$eventDate = get_field('event_date');
			$eventTime = get_field('event_time');
			$eventLocation = get_field('event_location');
			$eventDescription = get_field('event_description');

			if($eventName) {
		?>

		<div id="home-top">
			<div class="long-card">
				<h2 class="heyyou-voice heading-indent">Next event - <?=$eventName?></h2>
				<h3 class="info-voice heading-indent"><?=$eventDate?> - <?=$eventTime?></h3>
				<h3 class="info-voice heading-indent"><?=$eventLocation?></h3>
				<p class="reading-voice heading-indent"><?=$eventDescription?></p>

			</div>

			<div class="long-card">
				<h2 class="heyyou-voice heading-indent">Current job postings</h2>
				<ul>
		
<?php }
			if(have_rows('job_info')) {
				while(have_rows('job_info')) {
					the_row();

					$department = get_sub_field('department');
					$jobTitle = get_sub_field('job_title');
					$termInfo = get_sub_field('term_info');
					$payGrade = get_sub_field('pay_grade');
					$postURL = get_sub_field('posting_link');
					?>

					<li class="info-voice">
						<a href="<?=$postURL?>" target="_blank">
							<?=$department?> - <span class="strong info-voice"><?=$jobTitle?></span> - <?=$termInfo?>, pay grade <?=$payGrade?>
						</a>
					</li>
					
					<?php } ?>
				</ul>
			</div>
		</div>
		<div id="home-bottom">
			<?php 
			if(have_rows('home_page_tile')) {
				while(have_rows('home_page_tile')) {
					the_row();

					$tileHeading = get_sub_field('tile_heading');
					$tileLinks = get_sub_field('tile_links');
			?>

				<div class="home-tile">
					<h2 class="heyyou-voice heading-indent"><?=$tileHeading?></h2>
					<ul>
						<?php
						if(have_rows('tile_links')) {
							while(have_rows('tile_links')) {
								the_row();
								$linkName = get_sub_field('link_name');
								$linkURL = get_sub_field('link_url');
								$linkEmail = get_sub_field('link_email');
						?>
						<li class="info-voice">
							<?php if($linkURL) { ?>
								<a href="<?=$linkURL?>"><?=$linkName?></a>
							<?php } else { ?>
								<a href="mailto:<?=$linkEmail?>"><?=$linkName?></a>
							<?php } ?>
						</li>
					<?php } } ?>
					</ul>
				</div>
					<?php 
					}

				}
			}
					

			 ?>

			
		</div>
	</inner-column>
</section>


