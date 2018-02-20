<div class="container-fluid">
  <div class="row maincontent-row">
    <div class="content-container">
      <div class="col-md-4 text-center">
        <?php if( get_sub_field('icon_image_1') ): ?>
          <img class="" src="<?php the_sub_field('icon_image_1'); ?>" alt="">
        <?php endif; ?>
        <h2><?php the_sub_field('icon_title_1'); ?></h2>
        <hr class="underline">
        <p><?php the_sub_field('icon_content_1'); ?></p>
      </div>
      <div class="col-md-4 text-center">
        <?php if( get_sub_field('icon_image_2') ): ?>
          <img class="" src="<?php the_sub_field('icon_image_2'); ?>" alt="">
        <?php endif; ?>
        <h2><?php the_sub_field('icon_title_2'); ?></h2>
        <hr class="underline">
        <p><?php the_sub_field('icon_content_2'); ?></p>
      </div>
      <div class="col-md-4 text-center">
        <?php if( get_sub_field('icon_image_3') ): ?>
          <img class="" src="<?php the_sub_field('icon_image_3'); ?>" alt="">
        <?php endif; ?>
        <h2><?php the_sub_field('icon_title_3'); ?></h2>
        <hr class="underline">
        <p><?php the_sub_field('icon_content_3'); ?></p>
      </div>
    </div>
  </div>
</div>
