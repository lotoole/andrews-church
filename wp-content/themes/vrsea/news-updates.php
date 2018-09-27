<?php
//Template Name: news-updates
the_post();

$newsupdates = new WP_Query(array(
  'post_type' => array('news_updates'),
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
<section class="newsletters newsupdates">
  <div class="container">
    <div class="row">
      <?php if($newsupdates->have_posts()) : while($newsupdates->have_posts()) : $newsupdates->the_post(); ?>


      <?php $count++; ?>
      <?php if($count == 5) {$displayTables = true;} ?>
      <?php if(!$displayTables): ?>
      <div class="col-md-6">
        <div class="newsletter-post" data-mh>
          <h3 class="title"><?php the_title(); ?></h3>
        <p class="content-wrap"><span class="date"><?php echo get_the_time('m/d/y'); ?></span>
          <?php $content = get_the_content(); ?>
          <!-- truncate the string -->
          <?php
            $printLink = false;
            if($content.length > 40) {
              $content = $content.substring(0, 40);
              $printLink = true;
            }
           ?>
          <!-- print the string -->
          <?php echo $content; ?>
          <!-- print the link if it is too long -->
          <?php $file = get_field('file_link');
          if($file) {
            ?>
            <a href="<?php echo $file['url']; ?>">Read More&raquo;</a>
          <?php } ?>
          </p>
        </div>
      </div>
      <?php else: ?>
        <!-- if its the first one, set up title -->
          <?php if($count == 5): ?>
            <div class="col-md-12">
              <h1 style="text-align: center; margin-bottom: 5px;">Meeting Minutes Archive</h1>
            </div>
            <!-- div to contain table -->
            <div class="col-md-12 archive-wrap">
            <?php endif; ?>
          <!-- now display the old newsletters -->
                <?php $minutes = get_field('meeting_minutes'); ?>
                <a href="<?php echo $minutes['url']; ?>"><?php echo get_the_time('m/d/y'); ?></a>
          <!-- if it is the last post, close the table -->
          <?php if (($newsupdates->current_post +1) == ($newsupdates->post_count)) {
            // close div wrapping table
            print '</div>';
          } ?>
      <?php endif; ?>
    <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>
