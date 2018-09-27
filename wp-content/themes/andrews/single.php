<?php
the_post();

get_header();

?>
<?php if ( get_post_type( get_the_ID() ) == 'meeting_minutes' ) : ?>
<section class="filter-meetings">
  <div class="container">
    <div class="row">
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
    </div>
  </div>
</section>
<?php elseif( get_post_type( get_the_ID() ) == 'board_member' ): ?>
<section class="single-board-member">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="member">
          <?php the_post_thumbnail('excerpt'); ?>
          <div class="content">
            <h2><?php the_title(); ?></h2>
            <h4><?php the_field('member_status'); ?> <span>(<?php the_field('status_expiration'); ?>)</span></h4>
            <div style="margin-top: 10px;">
              <?php $ID = strtolower(get_the_title()); ?>
              <a href="#<?php echo preg_replace('/\s+/', '', $ID) ?>" class="btn btn-primary board-member-contact">Contact Member</a>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php the_title(); ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
