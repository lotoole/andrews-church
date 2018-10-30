<?php

//Template Name: Homepage
get_header();

?>

<section class="churches">
  <div class="container">
    <div class="row">
      <?php if( have_rows('churches') ): while ( have_rows('churches') ) : the_row();
            $image = get_sub_field('image');
            $size = 'square';
      ?>
      <div class="col-md-4">
        <div class="church-info">
          <?php echo wp_get_attachment_image( $image, $size ); ?>
          <div class="content">
            <h4><?php the_sub_field('name') ?></h4>
            <p class="address">
              <?php the_sub_field('address'); ?>
            </p>
            <span style="font-weight: bold;">Weekend Masses</span>
            <?php the_sub_field('mass_dates'); ?>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="contact-info">
    <div class="row no-gutters">
      <div class="col-md-6">
        <div class="contact content">
          <h2>Contact Information</h2>
          <?php if( have_rows('contact_information') ): while ( have_rows('contact_information') ) : the_row(); ?>
            <?php the_sub_field('text_line'); ?> <br>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="general content">
          <?php if( have_rows('general_information') ): while ( have_rows('general_information') ) : the_row(); ?>
            <h2><?php the_sub_field('title'); ?><h2>
              <p><?php the_sub_field('content'); ?></p>
          <?php endwhile; endif; ?>
          <h2>Confessions</h2>
          <p>	Saturday 3:15 to 3:45 PM at St. Andrew, Waterbury, and by appointment. Call the rectory at the phone number above.</p>
          <h2>The Sacraments</h2>
          <p>Inquiries concerning Baptism, First Communion, Confirmation, or Marriage should be made to Fr. Mercure at the address and phone number above.</p>
        </div>
      </div>
    </div>
</section>

<section class="bulliten-promo">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Weekday and Holiday Mass</h1>
      </div>
      <div class="col-md-4">
        <a href="#contactForm" class="btn btn-lg">Mass Information</a>
      </div>
    </div>
  </div>
</section>
<a href="#contact-form" class="form-link"></a>

<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>

<?php get_footer(); ?>
