<?php
/*
Template Name: confirm
*/
get_header('other'); ?>
<main>
	<div class="confirm">
		<div class="inner">
			<h3 class="headingTop">
				お問い合わせ
			</h3>
			<p>
				以下の内容でよろしければ<span>送信</span>を押してください。
			</p>
			<?php echo do_shortcode( '[mwform_formkey key="27"]' ); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
