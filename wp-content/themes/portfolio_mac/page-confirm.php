<?php
/*
Template Name: confirm
*/
get_header('other'); ?>
<main>
	<div class="confirm">
		<h3 class="headingTop">
			お問い合わせ
		</h3>
		<?php echo do_shortcode( '[mwform_formkey key="27"]' ); ?>
	</div>
</main>
<?php get_footer(); ?>
