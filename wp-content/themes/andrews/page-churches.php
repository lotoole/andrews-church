<?php
//Template Name: Churches Landing
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
        <h6>General</h6>
        <p><a href="http://andrews.localhost/churches/history-of-catholic-parishes/">A Short History of Catholic Parishes in Waterbury and the Mad River Valley</a></p>
      </div>
      <?php

      if ( have_rows( 'flexible_content' ) ) {
          while ( have_rows( 'flexible_content' ) ) {
              the_row();
              get_template_part( 'partials/' . get_row_layout() );
          }
      }
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
