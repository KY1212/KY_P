<?php
/*
Template Name: confirm
*/
get_header('other'); ?>
  <div class="contact_confirm">
    <h2 class="heading">Contact<span>Contact</span></h2>
    <p class="text">
      以下の内容でよろしければ<span>送信</span>を押してください。
    </p>
    <div class="contents">
      <?php echo do_shortcode( '[mwform_formkey key="27"]' ); ?>
    </div>
  </div>
</div>
<?php	get_footer(); ?>
