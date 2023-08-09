<?php

$sampleHeading = get_field('sample_heading');
$sampleText = get_field('sample_text');
$source = get_field('source');

if ($photo) {
	$photo = $photo["url"];
} else {
	$photo = "https://peprojects.dev/images/square.jpg";
}

?>

<detail-card>
	<h3 class="shout-voice"><?=$sampleHeading;?></h2>

	<picture class="item-image" style="background-image: url('<?=$photo?>')">
		</picture>

	<div class="reading-voice p">
		<p><?=$sampleText;?></p>
	</div>

	<p class="reading-voice"><?=$source;?></p>

	<a class="permalink reading-voice" href="<?php the_permalink(); ?>">See details</a>
</detail-card>