<?php
//Template Name: News
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

<section class="news">
  <div class="container">
    <?php if( have_rows('news_articles') ): while ( have_rows('news_articles') ) : the_row(); ?>
      <div class="col-md-12" style="padding: 15px 0 0 0;">
        <h6><?php the_sub_field('title'); ?></h6>
        <p><?php the_sub_field('content'); ?></p>
      </div>
    <?php endwhile; endif; ?>
  </div>
</section>




<?php get_footer(); ?>
