				<div class="inner">
					<h2 class="heading">Works<span>Works</span></h2>
					<div class="contentsWrap">
						<div class="deliverables">
							<a href="<?php echo home_url(); ?>/deliverables">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
          <a href="<?php the_permalink(); ?>">
            <?php
              $article_url = wp_get_attachment_url(get_post_thumbnail_id());
              $article_bg = "style='background-image:url(".$article_url.");'";
            ?>
								<div class="image" <?php echo $article_bg; ?>>成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="<?php echo home_url(); ?>/deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
						<div class="deliverables">
							<a href="<?php echo home_url(); ?>/deliverables.html">
								<div class="image">成果物</div>
							</a>
						</div>
					</div>
				</div>
