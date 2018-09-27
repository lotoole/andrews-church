<?php
//Template Name: Medial Questions
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
<section class="medical-questions">
  <div class="row no-gutters">
    <div class="col-md-12" style="padding: 0;">
      <div class="extra-help">
        <?php the_field('more_help'); ?>
      </div>
    </div>
    <div class="col-md-12 d-flex justify-content-center align-items-center faq-promo">
        <h3>Have More Questions?</h3>
        <a href="/faq.php?page_id=19" class="btn btn-primary">Check Our Helpful Resources</a>
    </div>
  </div>
</section>


<?php get_footer(); ?>
