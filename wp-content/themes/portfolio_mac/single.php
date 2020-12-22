<?php
/*
Template Name: single
*/
get_header('other'); ?>
<main>
	<section class="deliverables">
	<h2 class="heading">成果物<span>成果物</span></h2>
		<div class="contentsWrap">
			<?php
			$the_query = sub_loop(6,$paged);
				$counter = '';
				if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
				++$counter;
			?>
			<div class="deliverables">
				<a href="<?php the_permalink(); ?>">
				<?php
					$article_url = wp_get_attachment_url(get_post_thumbnail_id());
					$article_bg = "style='background-image:url(".$article_url.");'";
				?>
				<div class="image" <?php echo $article_bg; ?>></div>
				<p class="description"><?php the_title(); ?></p>
				</a>
			</div>
				<?php
					endwhile; endif;
					wp_reset_postdata();
				?>
		</div>
</section>
</main>

<?php get_footer(); ?>
