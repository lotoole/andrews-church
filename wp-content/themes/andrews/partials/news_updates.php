<?php
$image = get_sub_field('image');
$size = 'medium';
$link = get_sub_field('button_link');

?>
<section class="news">
  <div class="container">
    <div class="row">
        <?php if($image): ?>
            <div class="col-md-4">
              <?php echo wp_get_attachment_image( $image, $size ); ?>
          </div>
          <div class="col-md-8">
          <div class="information">
            <span class="date"><?php the_sub_field('date'); ?></span>
            <h1><?php the_sub_field('title'); ?></h1>
            <p class = "intro"><?php the_sub_field('intro'); ?></p>
            <?php if($link): ?>
              <a href="<?php echo $link; ?>" target="_blank" class="btn btn-lg"><?php the_sub_field('button_text'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            <?php endif; ?>
          </div>
        </div>
    <?php else: ?>
        <div class="col-md-12">
        <div class="information">
          <span class="date"><?php the_sub_field('date'); ?></span>
          <h1><?php the_sub_field('title'); ?></h1>
          <p class = "intro"><?php the_sub_field('intro'); ?></p>
          <?php if($link): ?>
            <a href="<?php echo $link; ?>" target="_blank" class="btn btn-lg"><?php the_sub_field('button_text'); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
    </div>
  </div>
</section>
