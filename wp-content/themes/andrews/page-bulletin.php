<?php
//Template Name: Bulletin
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

<section class="schedule">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Liturgy Schedule for This Week</h1><br>
      </div>
      <div class="col-md-12">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Day</th>
              <th scope="col">Month</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Church</th>
              <th scope="col">Intention</th>
            </tr>
          </thead>
          <tbody>
            <?php if( have_rows('bulletin') ): while ( have_rows('bulletin') ) : the_row(); ?>
            <tr>
              <th scope="row"><?php the_sub_field('day'); ?></th>
              <td><?php the_sub_field('month'); ?></td>
              <td><?php the_sub_field('date'); ?></td>
              <td><?php the_sub_field('time'); ?></td>
              <td><?php the_sub_field('church'); ?></td>
              <td><?php the_sub_field('intention'); ?></td>
            </tr>
            <?php endwhile; endif; ?>
          </tbody>
        </table>
    </div>
    <div class="col-md-12">
      <h1 style="margin-top: 40px;">Last Weekends Collections</h1>
      <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Parish</th>
            <th scope="col">Offertory</th>
            <th scope="col">Insurance</th>
            <th scope="col">Fuel</th>
          </tr>
        </thead>
        <tbody>
          <?php if( have_rows('collections') ): while ( have_rows('collections') ) : the_row(); ?>
            <tr>
              <th scope="row"><?php the_sub_field('parish'); ?></th>
              <td><?php the_sub_field('offertory'); ?></td>
              <td><?php the_sub_field('insurance'); ?></td>
              <td><?php the_sub_field('fuel'); ?></td>
            </tr>
          <?php endwhile; endif; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-12">
      <h1 style="margin-top: 40px;">Contributing to Your Parish On-Line</h1>
      <p>With assistance from the Diocese of Burlington, members of our parishes may now make weekly parish offertory contributions on-line via a <a href="https://www.myowngiving.com/Default.aspx?cid=540" target="_blank">secure website</a>. Since members of Our Lady of the Snows/St. Patrick Parish have expressed an interest in on-line giving, we are making this option available to them first.</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
