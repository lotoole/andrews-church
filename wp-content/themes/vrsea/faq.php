<?php
//Template Name: FAQ's
the_post();

get_header();

?>
<section class="faq">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 style="text-align: center;">Helpful Resources</h1>
      </div>
      <div class="col-md-12" style="border-top: none;">
        <!-- <h3 style="text-align: center; margin-top: 20px; font-style: italic;">This page is currently under construction</h3> -->
        <div class="faq-buttons">
          <?php if( have_rows('faq_buttons') ): ?>
            <?php while( have_rows('faq_buttons') ): the_row(); ?>
              <?php $ID = strtolower(get_sub_field('button_text')); ?>
          		<a href="#<?php echo preg_replace('/\s+/', '', $ID); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a>
          	<?php endwhile; ?>
            <?php endif; ?>
        </div>
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
