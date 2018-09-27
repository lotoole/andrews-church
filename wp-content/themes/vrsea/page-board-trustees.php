<?php
//Template Name: Board Trustees
the_post();

$board = new WP_Query(array(
  'post_type' => 'board_member',
  'orderby' => 'date',
  'order' => 'ASC',
  'posts_per_page' => -1
));

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


<section class="board-trustees">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="position-heading">Trustees</h1>
        <h6 class="board-date">As of: <span><?php the_field('board_date'); ?><span> </h6>
      </div>
      <?php if($board->have_posts()) : while($board->have_posts()) : $board->the_post(); ?>
        <?php if(get_field('member_position') == 'trustee') : ?>
        <div class="col-md-4">
          <div class="member">
            <?php the_post_thumbnail('excerpt'); ?>
            <div class="content">
              <h2><?php the_title(); ?></h2>
              <h4><?php the_field('member_status'); ?> <span class="smaller">(<?php the_field('status_expiration'); ?>)</span></h4>
              <hr>
              <!-- add the region and paragraph here -->
              <h4>Region: <span class="smaller"><?php the_field('region'); ?></span></h4>
              <hr>
              <p class = "member-intro"><?php the_field('brief_introduction'); ?></p>
              <!-- <hr>
              <h4>Contact</h4> -->
              <div style="text-align: center; margin-top: 10px;">
                <?php $ID = strtolower(get_the_title()); ?>
                <a href="#<?php echo preg_replace('/\s+/', '', $ID) ?>" class="btn btn-primary board-member-contact">Contact Member</a>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>

        <div class="col-sm-12">
          <h1 class="position-heading">Board Members</h1>
        </div>
    <?php if($board->have_posts()) : while($board->have_posts()) : $board->the_post(); ?>
      <?php if(get_field('member_position') == 'board') : ?>
        <div class="col-md-4">
          <div class="member">
            <?php the_post_thumbnail('excerpt'); ?>
            <div class="content">
              <h2><?php the_title(); ?></h2>
              <h4><?php the_field('member_status'); ?> <span class="smaller">(<?php the_field('status_expiration'); ?>)</span></h4>
              <h4>Region: <span class="smaller"><?php the_field('region'); ?></span></h4>
              <hr>
              <p class = "member-intro"><?php the_field('brief_introduction'); ?></p>
              <!-- <hr>
              <h4>Contact</h4> -->
              <div style="text-align: center; margin-top: 10px;">
                <?php $ID = strtolower(get_the_title()); ?>
                <a href="#<?php echo preg_replace('/\s+/', '', $ID) ?>" class="btn btn-primary board-member-contact">Contact Member</a>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php endwhile; endif; wp_reset_postdata(); ?>

      <div class="col-sm-12">
        <h1 class="position-heading">lobbyist</h1>
      </div>
  <?php if($board->have_posts()) : while($board->have_posts()) : $board->the_post(); ?>
    <?php if(get_field('member_position') == 'lobbyist') : ?>
      <div class="col-md-4">
        <div class="member">
          <?php //the_post_thumbnail('excerpt'); ?>
          <div class="content">
            <h2><?php the_title(); ?></h2>
            <!-- <h4><?php //the_field('member_status'); ?> <span class="smaller">(<?php //the_field('status_expiration'); ?>)</span></h4> -->
            <!-- <h4>Region: <span class="smaller"><?php //the_field('region'); ?></span></h4> -->
            <hr>
            <p class = "member-intro"><?php the_field('brief_introduction'); ?></p>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
