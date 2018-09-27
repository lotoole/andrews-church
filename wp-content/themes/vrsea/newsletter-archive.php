<?php
//Template Name: newsletter-archive
the_post();

$newsletters = new WP_Query(array(
  'post_type' => array('newsletter'),
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
<?php
// set count of newsletters displayed
$displayTables = false;
$count = 0;
 ?>
<section class="newsletters">
  <div class="container">
    <div class="row">
      <?php if($newsletters->have_posts()) : while($newsletters->have_posts()) : $newsletters->the_post(); ?>
        <?php $count++; ?>
        <?php if($count == 5) {$displayTables = true;} ?>
        <?php if(!$displayTables): ?>
          <div class="col-md-6">
            <div class="newsletter-post" data-mh>
              <h3 class="title"><?php the_title(); ?></h3>
              <span class="date"><?php echo get_the_time('m/d/y'); ?></span>
              <?php the_content(); ?>
              <?php $letter = get_field('newsletter'); ?>
              <?php if($letter) : ?>
                <a href="<?php echo $letter['url']; ?>">View Newsletter &raquo;</a>
              <?php endif; ?>
            </div>
      </div>
          <!-- set up the matrix now -->
        <?php else: ?>
          <!-- if its the first one, set up title -->
            <?php if($count == 5): ?>
              <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 5px;">Newsletter Archive</h1>
              </div>
              <!-- div to contain table -->
              <div class="col-md-12 archive-wrap">
              <?php endif; ?>
            <!-- now display the old newsletters -->
                  <?php $letter = get_field('newsletter'); ?>
                  <a class="old-post" href="<?php echo $letter['url']; ?>"><?php echo get_the_time('m/d/y'); ?></a>
            <!-- if it is the last post, close the table -->
            <?php if (($newsletters->current_post +1) == ($newsletters->post_count)) {
              // close div wrapping table
              print '</div>';
            } ?>
        <?php endif; ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
