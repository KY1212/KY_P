<?php
/*
Template Name: index
*/
get_header(); ?>
	<main class="index">
		<section class="firstView">
			<?php include('common/common-firstView.php'); ?>
		</section>
		<section class="about sp" id="about">
			<?php include('common/common-about.php'); ?>
		</section>
		<section class="works sp" id="works">
			<?php include('common/common-works.php'); ?>
		</section>
		<section class="form sp" id="contact">
		<p>お問い合わせはこちらから</p>
		</section>
	</main>
<?php get_footer(); ?>
