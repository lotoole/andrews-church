<?php
the_post();

get_header();

?>
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
      <div class="col-md-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
