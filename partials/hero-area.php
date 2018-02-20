<div class="container-fluid hero-area" style="background-image:url('<?php the_sub_field('background_image');?>');">
  <div class="row">
    <div class="content-container hero-container">
      <div class="col-md-6">
        <img class="hero-image" src="<?php the_sub_field('hero_image'); ?>" alt="">
      </div>
      <div class="col-md-6 content">
        <h1><?php the_sub_field('header'); ?></h1>
        <h2><?php the_sub_field('subtitle'); ?></h2>
        <a href="<?php the_sub_field('button_link'); ?>"><button class="bubbly-button"><?php the_sub_field('button_text'); ?></button></a>
      </div>
    </div>
  </div>
</div>
