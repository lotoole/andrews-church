<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hero-content">
          <?php if(get_sub_field('hero_sub_heading')) : ?>
          <h1><?php the_sub_field('hero_heading'); ?></h1>
          <h3 class="hero-subheading"><?php the_sub_field('hero_sub_heading'); ?></h3>
        <?php else : ?>
          <h1 style="margin-bottom: 0;"><?php the_sub_field('hero_heading'); ?></h1>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
