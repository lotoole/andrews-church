<section class="faq" style="padding:0px;">
  <div class="container">
    <?php $ID = strtolower(get_sub_field('faq_section_title')); ?>
    <div class="row" id="<?php echo preg_replace('/\s+/', '', $ID); ?>">
      <?php if(get_the_content()) : ?>
      <div class="col-md-12">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
      <div class="col-md-12">
        <h2 class="section-title"><?php the_sub_field('faq_section_title'); ?></h2>
      </div>
      <?php if ( $columns = get_sub_field( 'columns' ) ) : foreach ( $columns as $column ) : ?>
      <div class="col-md-12 question">
        <div class="toggle">
          <span><i class="fa fa-minus" aria-hidden="true"></i></span>
          <h3><?php echo $column['question']; ?></h3>
        </div>
        <?php echo $column['answer']; ?>
      </div>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>
