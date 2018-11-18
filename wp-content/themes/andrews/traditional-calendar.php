<?php
//Template Name: Traditional Calendar
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

<section class="program-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="calendar">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Schedule</h2>
      </div>
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Year</th>
                <th scope="col">Month</th>
                <th scope="col">Date</th>
                <th scope="col">Class/Activity</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
              <?php if( have_rows('religious-calendar') ): while ( have_rows('religious-calendar') ) : the_row(); ?>
              <tr>
                <th scope="row"><?php the_sub_field('year'); ?></th>
                <td><?php the_sub_field('month'); ?></td>
                <td><?php the_sub_field('date'); ?></td>
                <td><?php the_sub_field('class'); ?></td>
                <td><?php the_sub_field('description'); ?></td>
              </tr>
              <?php endwhile; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
