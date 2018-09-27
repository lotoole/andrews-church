<?php
//Template Name: Meeting Minutes
the_post();

$meeting = new WP_Query(array(
  'post_type' => array('meeting_minutes'),
  'posts_per_page' => 1
));
get_header();

?>
<section class="filter-meetings">
  <div class="container">
    <div class="row">
      <?php if($meeting->have_posts()) : while($meeting->have_posts()) : $meeting->the_post(); ?>
      <div class="col-md-12 has-buttons">
        <?php previous_post_link('%link', '<i class="fa fa-arrow-left" aria-hidden="true"></i>'); ?>
        <?php next_post_link('%link', '<i class="fa fa-arrow-right" aria-hidden="true"></i>'); ?>
        <div class="date">
          <h3 class="header">Meeting Minutes</h3>
          <h3><?php echo get_the_time('m/d/y'); ?></h3>
        </div>
      </div>
      <?php if( have_rows('meeting_section') ): ?>
        <?php while( have_rows('meeting_section') ): the_row(); ?>
        <div class="col-md-12">
          <h6><?php the_sub_field('section_title'); ?></h6>
          <?php the_sub_field('section_content'); ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
