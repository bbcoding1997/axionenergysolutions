<?php if(have_rows('page_builder')): ?>
  <?php while (have_rows('page_builder')) : the_row(); ?>
    <!-- Hero Area -->
    <?php if(have_rows('hero_area')): ?>
      <?php while (have_rows('hero_area')) : the_row(); ?>
        <?php include('hero-area.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Hero Area -->

    <!-- Featured Title -->
    <?php if(have_rows('featured_slice')): ?>
      <?php while (have_rows('featured_slice')) : the_row(); ?>
        <?php include('featured-slice.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Featured Title -->

    <!-- Half And Half -->
    <?php if(have_rows('half_and_half')): ?>
      <?php while (have_rows('half_and_half')) : the_row(); ?>
        <?php include('half-and-half.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Half And Half -->

    <!-- Icon Slice -->
    <?php if(have_rows('icon_slice')): ?>
      <?php while (have_rows('icon_slice')) : the_row(); ?>
        <?php include('icon-section.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Icon Slice -->

    <!-- Icon Slice -->
    <?php if(have_rows('icon_slice')): ?>
      <?php while (have_rows('icon_slice')) : the_row(); ?>
        <?php include('icon-section.php'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Icon Slice -->
  <?php endwhile; ?>
<?php endif; ?>
