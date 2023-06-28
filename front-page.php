<?php 
$image = get_field('test_image');
?>

<section>
	<h2 class="test"><?php echo esc_html( get_field('test_text') ); ?></h2>
	<img src="<?php echo $image['url']; ?>" />
	<?php echo esc_html(get_field('test_body')); ?>
	<p>added p</p>
	<p>added another p</p>
</section>