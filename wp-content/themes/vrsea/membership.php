<?php
//Template Name: membership
the_post();

get_header();

?>

<?php

// if ( have_rows( 'flexible_content' ) ) {
//     while ( have_rows( 'flexible_content' ) ) {
//         the_row();
//         get_template_part( 'partials/' . get_row_layout() );
//     }
// }
?>
<section class="printable-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="print-content">
        <form>
          <div class="form-group row">
            <div class="col-md-10">
              <h3 class="form-title">Membership Form</h3>
            </div>
            <div class="col-md-10 offset-md-2">
              <p><span>______ </span> Enclosed are my dues of $20.00 per retiree/beneficiary</p>
              <p><span>______ </span> Extra help for VRSEA efforts - Donation $: <span> ______</span></p>
            </div>
            <!-- <div class="col-md-10 offset-md-2">
              <h6 style="font-size: 20px; margin: 0 0 5px 0;">Print and Mail this form along with $20 to:</h6>
              <ul>
                <li>VRSEA, Inc.</li>
                <li>P. O. Box 247</li>
                <li>Montpelier, Vermont 05601-0247</li>
              </ul>
              <span class="disclaimer">Please note that at this time we do not have the ability to receive application/payments electronically. Please mail to above address. Thank you.</span>
            </div> -->
          </div>

          <div class="form-group row">
           <label for="name" class="col-md-2 col-form-label">Name (or Mailing Label)</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="name" name="name" placeholder="Name">
           </div>
          </div>

          <div class="form-group row">
           <label for="address" class="col-md-2 col-form-label">Address</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="address" name="address" placeholder="Address">
           </div>
          </div>

          <div class="form-group row">
           <label for="phoneNumber" class="col-md-2 col-form-label">Phone Number</label>
           <div class="col-md-8">
             <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number">
           </div>
          </div>

          <div class="form-group row">
           <label for="email" class="col-md-2 col-form-label">Email</label>
           <div class="col-md-8">
             <input type="email" class="form-control" id="email" name="email" placeholder="Email">
           </div>
          </div>

          <div class="form-group row">
            <div class="col-md-8 offset-md-2">
              <p class="disclaimer">Note: VRSEA will not publish, sell or release your e-mail address. Providing your e-mail will allow VRSEA to send you newsletters electronically and timely communications as necessary. Without your official permission to do otherwise, your e-mail address will be kept confidential. Thank you.</p>
            </div>
          </div>

          <!-- <div class="form-group row">
           <label for="datepicker" class="col-md-2 col-form-label">Date Retired</label>
           <div class="col-md-8">
             <input type="text" class="form-control" id="datepicker" name="datepicker" placeholder="Date Retired">
           </div>
          </div> -->

          <div class="form-group row">
            <div class="col-md-10">
              <p>Mail form with your check to: <br><span>(Please make all checks payable to VRSEA, INC.)<span></p>
              <ul>
                <li>VRSEA, Inc.</li>
                <li>P. O. Box 247</li>
                <li>Montpelier, Vermont 05601-0247</li>
              </ul>
              <!-- <span class="disclaimer">Please note that at this time we do not have the ability to receive application/payments electronically. Please mail to above address. Thank you.</span> -->
            </div>

              <div style="margin: 20px 0 40px 0;" class="col-sm-12">
                <input class="btn btn-primary" type="button" onclick="printForm()" value="Print"/>
              </div>

        </form>
      </div>
    </div>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div class="col-md-12 suport">
      <p>Thank you for your interest and support of VRSEA!</p>
      <p style="font-size: 15px; max-width: 50%; margin: auto;">PS: Please keep us current with any changes to the above information, especially if you have a temporary or summer/winter address.</p>
    </div>
  </div>
</section>

<script type="text/javascript">
function printForm () {
  window.print();
}
</script>

<?php get_footer(); ?>
<!-- Reap the benefits of being a retired state employee. As a member you will have access to the entire website including meeting minutes and a monthly newsletter -->
