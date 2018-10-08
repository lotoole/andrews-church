<?php
//Template Name: Churches Landing
get_header();

?>

<section class="single-heading">
  <div class="container">
    <?php $image = get_field('hero_image'); ?>
    <div class="bg" style="background-image: url(<?php echo $image['url']; ?>);"></div>
    <div class="content">
      <h1><?php the_field('hero_text'); ?></h1>
    </div>
  </div>
</section>

<section class="church-gallery">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p><a href="">A Short History of Catholic Parishes in Waterbury and the Mad River Valley</a></p>
      </div>
      <div class="col-md-6">
        <div class="content">
          <h6>Saint Andrews Church</h6>
          <ul>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="content">
          <h6>Our Lady of the Snows and Saint Patrick Parish</h6>
          <ul>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
            <li><a href="">Pictures of Saint Andrew Church</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
