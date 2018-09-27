<?php
//Template Name: About
the_post();

get_header();

?>
<?php the_content(); ?>
<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center align-items-center faq-promo">
          <h3 style="margin: 0 20px 0 0;"><?php the_field('about_cta_text'); ?></h1>
          <?php $cta_link = get_field('about_cta_link'); ?>
          <a href="<?php echo $cta_link; ?>" class="btn btn-primary"><?php the_field('about_cta_button_text'); ?></a>
          <!-- <h3 style="margin: 0 20px 0 0;">Need more information?</h3> -->
          <!-- <a href="vrsea.dev/faq" class="btn btn-primary">Check Our FAQ's</a> -->
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
