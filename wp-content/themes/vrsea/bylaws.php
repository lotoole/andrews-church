<?php
//Template Name: By Laws
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

<section class="bylaws-content">
  <div class="container">
    <div class="row">
    <?php if( have_rows('law') ): ?>
      <?php while( have_rows('law') ): the_row(); ?>
      <div class="col-md-12">
        <h2><?php the_sub_field('article_number'); ?></h2>
        <h6><?php the_sub_field('law_sub_heading'); ?></h6>
        <?php the_sub_field('content'); ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
