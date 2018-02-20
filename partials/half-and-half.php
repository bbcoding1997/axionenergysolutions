<div class="container-fluid">
  <?php if( get_sub_field('image_half') ): ?>
    <?php if( get_sub_field('image_position') == 'right' ): ?>
      <div class="row">
        <div class="col-md-6 text-center padding-double-side padding-tb-60">
          <h2><?php the_sub_field('title'); ?></h2>
          <hr class="underline">
          <p><?php the_sub_field('content'); ?></p>
          <?php if( get_sub_field('button_text') ): ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button class="bubbly-button"><?php the_sub_field('button_text'); ?></button></a>
          <?php endif; ?>
        </div>
        <div class="col-md-6 cover" style="background-image:url('<?php the_sub_field('image_half');?>');">

        </div>
      </div>
    <?php elseif( get_sub_field('image_position') == 'left' ): ?>
      <div class="row">
        <div class="col-md-6 cover" style="background-image:url('<?php the_sub_field('image_half');?>');">

        </div>
        <div class="col-md-6 text-center padding-double-side padding-tb-60">
          <h2><?php the_sub_field('title'); ?></h2>
          <hr class="underline">
          <p><?php the_sub_field('content'); ?></p>
          <?php if( get_sub_field('button_text') ): ?>
            <a href="<?php the_sub_field('button_link'); ?>"><button class="bubbly-button"><?php the_sub_field('button_text'); ?></button></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  <?php else:?>
    <div class="row maincontent-row">
      <div class="content-container">
        <div class="col-md-12 text-center">
          <h2><?php the_sub_field('title'); ?></h2>
          <hr class="underline">
          <p><?php the_sub_field('content'); ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
