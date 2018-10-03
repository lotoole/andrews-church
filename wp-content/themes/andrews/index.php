<?php

get_header();

?>

<section class="churches">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="church-info">
          <img src="https://fillmurray.com/g/300/200" alt="">
          <div class="content">
            <h4>Saint Andrew Church</h4>
            <p class="address">
              109 South Main Street <br>
              Route 100, Waterbury
            </p>
            <span style="font-weight: bold;">Weekend Masses</span>
            <span>Date 1</span>
            <span>Date 2</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="church-info">
          <img src="https://fillmurray.com/g/300/200" alt="">
          <div class="content">
            <h4>Saint Andrew Church</h4>
            <p class="address">
              109 South Main Street <br>
              Route 100, Waterbury
            </p>
            <span style="font-weight: bold;">Weekend Masses</span>
            <span>Date 1</span>
            <span>Date 2</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="church-info">
          <img src="https://fillmurray.com/g/300/200" alt="">
          <div class="content">
            <h4>Saint Andrew Church</h4>
            <p class="address">
              109 South Main Street <br>
              Route 100, Waterbury
            </p>
            <span style="font-weight: bold;">Weekend Masses</span>
            <span>Date 1</span>
            <span>Date 2</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-info">
    <div class="row no-gutters">
      <div class="col-md-6">
        <div class="contact content">
          <h2>Contact Information</h2>
          C/O 109 South Main Street<br>
          Waterbury, VT, 05676<br>
          (802) 244-7734<br>
          (802) 244-7934 (FAX)<br>
          <a href="mailto:">Pastor</a><br>
          <a href="mailto:">Parish Office</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="general content">
          <h2>Confessions</h2>
          <p>	Saturday 3:15 to 3:45 PM at St. Andrew, Waterbury, and by appointment. Call the rectory at the phone number above.</p>
          <h2>The Sacraments</h2>
          <p>Inquiries concerning Baptism, First Communion, Confirmation, or Marriage should be made to Fr. Mercure at the address and phone number above.</p>
        </div>
      </div>
    </div>
</section>

<section class="bulliten-promo">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Weekday and Holiday Mass</h1>
      </div>
      <div class="col-md-4">
        <a href="#contactForm" class="btn btn-lg">Mass Information</a>
      </div>
    </div>
  </div>
</section>
<a href="#contact-form" class="form-link"></a>

<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>

<?php get_footer(); ?>
