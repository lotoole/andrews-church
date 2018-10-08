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

<section class="church-gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3></h3>
      </div>
      <div class="col-md-12">

      </div>
      <div class="col-md-12">

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
