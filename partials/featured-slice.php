<div class="container-fluid">
  <div class="row maincontent-row">
    <div class="content-container">
      <div class="col-md-12 text-center">
        <h2><?php the_sub_field('title'); ?></h2>
        <hr class="underline">
        <p><?php the_sub_field('content'); ?></p>
        <?php if( get_sub_field('button_text') ): ?>
          <a href="<?php the_sub_field('button_link'); ?>"><button class="bubbly-button"><?php the_sub_field('button_text'); ?></button></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
