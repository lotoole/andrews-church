<?php

//Template Name: Church Locations
get_header();

?>

<section class="locations">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="church-links">
          <li class="nav-item">
            <a class="nav-link active" id="pills-andrews-tab" href="#pills-andrews">Andrews Church</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-snows-tab" href="#pills-snows">Our Lady of The Snows Church</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-patrick-tab" href="#pills-patrick">St. Patrick Church</a>
          </li>
        </ul>
        <div>
          <div class="single-church" id="pills-andrews">
            <h2>St Andrews Church</h2>
            <iframe width="600" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q=109%20S%20Main%20St%2C%20Waterbury%2C%20VT%2005676&key=AIzaSyAibfZi_tHQ5r3GMsZk-9kwZ4ki1Z8vbdM" allowfullscreen></iframe>
          </div>
          <div class="single-church" id="pills-snows">
            <h1>Our Lady of The Snows Church</h1>
            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=6305%20Main%20St%2C%20Waitsfield%2C%20VT%2005673&key=AIzaSyAibfZi_tHQ5r3GMsZk-9kwZ4ki1Z8vbdM" allowfullscreen></iframe>
          </div>
          <div class="single-church" id="pills-patrick">
            <h1>St. Patrick Church</h1>
            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=116%20Church%20Rd%2C%20Fairfield%2C%20VT%2005455&key=AIzaSyAibfZi_tHQ5r3GMsZk-9kwZ4ki1Z8vbdM" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>

<?php get_footer(); ?>
