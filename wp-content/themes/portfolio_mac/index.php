<?php
/*
Template Name: index
*/
get_header(); ?>
	<main class="index">
		<section class="firstView">
			<?php include('common-firstView.php'); ?>
		</section>
		<section class="about sp" id="about">
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
