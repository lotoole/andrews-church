<?php
//Template Name: Single Church
get_header();

?>

<section class="single-heading">
  <div class="container">
    <?php $image = get_field('hero_image'); ?>
    <div class="bg" style="background-image: url(<?php echo $image['url']; ?>);"></div>
    <div class="content">
      <h1><?php the_field('hero_text'); ?></h1>
    </div>
  </div>
</section>

<section class="gen-content">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
