				<div class="inner">
					<h2 class="heading">Works<span>Works</span></h2>
					<div class="postWrap">
    <?php
      $the_query = sub_loop(8,$paged);
      $counter = '';
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
        ++$counter;
    ?>
      <div class="post">
        <a href="<?php the_permalink(); ?>">
          <?php
            $article_url = wp_get_attachment_url(get_post_thumbnail_id());
            $article_bg = "style='background-image:url(".$article_url.");'";
          ?>
          <div class="image" <?php echo $article_bg; ?>></div>
          <p class="description">
          <?php
            if(mb_strlen($post->post_title, 'UTF-8')>46){
              $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
              echo $title.'…';
            }else{
              echo $post->post_title;
            }
          ?>
          </p>
        </a>
      </div>
      <?php
        endwhile; endif;
        wp_reset_postdata();
      ?>
    </div>





				</div>
