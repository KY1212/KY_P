<?php
/*
Template Name: about
*/
get_header('other'); ?>
<main>
	<section class="about target" id="about">
		<?php include('common-about.php'); ?>
	</section>
	<section class="works sp" id="works">
		<?php include('common-works.php'); ?>
	</section>
	<section class="form sp" id="form">
		<?php include('common-contact.php'); ?>
	</section>
</main>
<?php get_footer(); ?>
