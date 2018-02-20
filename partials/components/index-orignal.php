<?php
  /* Template Name: Homepage */
  get_header();

?>
<!-- Hero Area -->
<div class="container-fluid hero-area" style="background-image:url('<?php if(have_rows('repeater_field_name')): ?><?php the_sub_field('background_image');?><?php endif; ?>');">
  <div class="row">
    <div class="content-container hero-container">
      <div class="col-md-6">
        <img class="hero-image" src="<?php if( get_field('hero_slice') ): ?><?php the_sub_field('hero_image'); ?><?php endif; ?>" alt="">
      </div>
      <div class="col-md-6 content">
        <?php if( get_field('hero_slice') ): ?>
            <h1><?php the_sub_field('header'); ?></h1>
        <?php endif; ?>
        <?php if( get_field('hero_slice') ): ?>
            <h2><?php the_sub_field('subtitle'); ?></h2>
        <?php endif; ?>
        <button class="bubbly-button"><?php if( get_field('hero_slice') ): ?><?php the_sub_field('button_text'); ?><?php endif; ?></button>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Area -->

<!-- Featured Title -->
<div class="container-fluid">
  <div class="row maincontent-row">
    <div class="content-container">
      <div class="col-md-12 text-center">
        <?php if( get_field('featured_title') ): ?>
            <h2><?php the_field('featured_title'); ?></h2>
        <?php endif; ?>
        <hr class="underline">
        <?php if( get_field('featured_subtitle') ): ?>
            <p><?php the_field('featured_subtitle'); ?></p>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div>
<!-- End Featured Title -->

<!-- Icon Slice -->
<div class="container-fluid">
  <div class="row maincontent-row">
    <div class="content-container">
      <div class="col-md-4 text-center">
        <?php if( get_field('icon_title') ): ?>
            <h2><?php the_field('icon_title'); ?></h2>
        <?php endif; ?>
        <hr class="underline">
        <?php if( get_field('icon_content') ): ?>
            <p><?php the_field('icon_content'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-md-4 text-center">
        <?php if( get_field('icon_title') ): ?>
            <h2><?php the_field('icon_title'); ?></h2>
        <?php endif; ?>
        <hr class="underline">
        <?php if( get_field('icon_content') ): ?>
            <p><?php the_field('icon_content'); ?></p>
        <?php endif; ?>
      </div>
      <div class="col-md-4 text-center">
        <?php if( get_field('icon_title') ): ?>
            <h2><?php the_field('icon_title'); ?></h2>
        <?php endif; ?>
        <hr class="underline">
        <?php if( get_field('icon_content') ): ?>
            <p><?php the_field('icon_content'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- End Icon Slice -->
<?php get_footer(); ?>
