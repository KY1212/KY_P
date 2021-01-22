<?php
/*
Template Name: about
*/
get_header('other'); ?>
<main>
	<section class="about target" id="about">
		<?php include('common/common-about.php'); ?>
	</section>
	<section class="works sp" id="works">
		<?php include('common/common-works.php'); ?>
	</section>
	<section class="form sp" id="contact">
		<p><a href="<?php echo get_stylesheet_directory_uri(); ?>/contact">お問い合わせはこちらから</a></p>
	</section>
</main>
<div class="otherFooterMargin">
	<?php get_footer(); ?>
</div>
