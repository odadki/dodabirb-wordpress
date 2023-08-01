<?php 

$image = get_field('cb01_image');
$body = get_field('cb01_body');
$title2 = get_field('cb02_title');
?>

<section>
	<h2 class="test"><?php echo esc_html(get_field('cb01_title')); ?></h2>
	<img src="<?php echo $image['url']; ?>" />
	<?php echo $body; ?>
	<p>added p from code</p>
	<p>added another p from code</p>
	<p>hello</p>
</section>
<section>
	<h2><?php echo $title2; ?></h2>
</section>