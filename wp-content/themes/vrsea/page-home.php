<?php
//Template Name: Homepage
the_post();

get_header();

?>
<section class="home-mission">
  <div class="row no-gutters">
    <div class="col-md-5">
      <div class="mission-statement">
        <h1>Mission Statement</h1>
        <p><?php the_content(); ?></p>
        <a href="/index.php?page_id=9" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <div class="col-md-7">
      <?php $mission_image = get_field('mission_image'); ?>
        <div class="background-image" style="background-image: url('<?php echo $mission_image['url']; ?>');"></div>
    </div>
  </div>
</section>

 <section class="homepage-newsupdates">
  <div style="padding: 0 25px;">
    <div class="row">
      <div class="col-md-5">
        <h1><?php the_field('news_flash_title'); ?></h1>
        <p><?php the_field('news_flash_intro'); ?></p>
        <a href="<?php the_field('news_flash_link'); ?>" class="btn btn-primary">News</a>
      </div>
      <div class="col-md-7">
        <?php the_field('featured_news'); ?>
        <!-- <ul>
          <?php //if(have_rows('featured_news')): while(have_rows('featured_news')): the_row(); ?>
            <?php
              //$post_object = get_sub_field('news');
              //if( $post_object ):
              	//$post = $post_object;
              	//setup_postdata( $post );
            	?>
              <li><span><?php //the_time(); ?>: </span><?php //the_content(); ?></li>
                <?php //wp_reset_postdata(); ?>
            <?php //endif; ?>
          <?php //endwhile; endif; ?>
        </ul> -->
      </div>
    </div>
  </div>
</section>


<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>


<section class="call-to-action style-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Need More Help?</h1>
        <a href="/faq.php?page_id=19" class="btn btn-primary">Check our Helpful Resources</a>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>
