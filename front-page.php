<?php 

$image = get_field('cb01_image');
$body = get_field('cb01_body');
?>

<section>
	<h2 class="test"><?php echo esc_html(get_field('cb01_title')); ?></h2>
	<img src="<?php echo $image['url']; ?>" />
	<?php echo $body; ?>
	<p>added p</p>
	<p>added another p</p>
</section>