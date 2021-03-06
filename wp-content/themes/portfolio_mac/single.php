<?php
/*
Template Name: deliveribles
*/
get_header('other'); ?>
	<main>
    <section class="deliveribles target">
      <div class="inner">
        <div class="postWrap">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="deliveriblesImg">
            <?php
              if( has_post_thumbnail() ):
                the_post_thumbnail('full');
              else :
              endif;
            ?>
          </div>
          <div class="detailsWrap">
            <h2 class="heading">
              <?php the_title(); ?>
            </h2>
            <p>
              <?php the_content(); ?>
            </p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>
