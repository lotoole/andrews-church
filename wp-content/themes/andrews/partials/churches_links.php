<div class="col-md-6">
  <div class="content">
    <h6><?php the_sub_field('church_name'); ?></h6>
    <ul>
      <?php if( have_rows('single_link') ): while ( have_rows('single_link') ) : the_row(); ?>
        <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a></li>
      <?php endwhile; endif; ?>
    </ul>
  </div>
</div>
