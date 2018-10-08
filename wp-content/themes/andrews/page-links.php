<?php
//Template Name: Links
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

<section class="links">
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Link</th>
        </tr>
      </thead>
      <tbody>
        <?php if( have_rows('links') ): while ( have_rows('links') ) : the_row(); ?>
        <tr>
          <th scope="row"><?php the_sub_field('title'); ?></th>
          <td><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link'); ?></a></td>
        </tr>
        <?php endwhile; endif; ?>
      </tbody>
    </table>
  </div>
</section>

<?php get_footer(); ?>
