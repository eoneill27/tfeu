<section class="page-section hero-page">
	<!-- <inner-column> -->

	<!-- </inner-column> -->
</section>

<section class="home-content">
	<inner-column>
		<?php

			if(have_rows('home_content')) {
				while(have_rows('home_content')) {
					the_row();

					if(get_row_layout() == 'home_heading') { ?>

						<h1 class="heyyou-voice"><?=the_sub_field('heading');?></h1>

					<?php } ?>

					<?php 
					if(get_row_layout() == 'home_subheading') {?>
						<h2 class="info-voice"><?=the_sub_field('subheading');?></h2>
					<?php } ?>

					<?php
					if(get_row_layout() == 'paragraph') { ?>
						<p class="reading-voice"><?=the_sub_field('paragraph');?></p>
					<?php } ?>
				<?php } ?>
			<?php } ?>
	</inner-column>
</section>


<h2>test</h2>