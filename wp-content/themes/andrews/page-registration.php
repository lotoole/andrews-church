<?php
//Template Name: Registration Form
get_header();

?>
<section class="reg-form-wrap">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>


<!-- <h1>Religious Education Program Registration</h1>
<form class="" action="index.html" method="post" id="regForm" style="margin: auto; display: block; max-width: 800px;">
  <fieldset style="border: 0;">
    <p>For which Religious Education Program do you wish to register participants?</p>
    <div class="form-group row" style="margin-left: 40px;">
      <input class="form-check-input" type="radio" name="saintAndrewProgram" id="saintAndrewProgram" value="saintAndrewProgram" checked>
        <div class="col-md-8">
          <label class="form-check-label" for="saintAndrewProgram">
          Saint Andrew Religious Education Program
          </label>
        </div>
    </div>
    <div class="form-group row" style="margin-left: 40px;">
      <input class="form-check-input" type="radio" name="MRValleyProgram" id="MRValleyProgram" value="MRValleyProgram" checked>
      <div class="col-md-8">
        <label class="form-check-label" for="MRValleyProgram">
        Mad River Valley Religious Education Program
        </label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="fatherName">Fathers Name</label>
      </div>
      <div class="col-md-9">
        <input type="text" class="form-control" id="fatherName" aria-describedby="fatherName" placeholder="Father Name">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="motherName">Mother Name</label>
      </div>
      <div class="col-md-9">
        <input type="text" class="form-control" id="motherName" aria-describedby="motherName" placeholder="Mother Name">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="mailingAddress">Mailing Address</label>
      </div>
      <div class="col-md-9">
        <input type="text" class="form-control" id="mailingAddress" aria-describedby="mailingAddress" placeholder="Mailing Address">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="phoneNumber">Phone Number</label>
      </div>
      <div class="col-md-9">
        <input type="text" class="form-control" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Phone Number">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="school">School</label>
      </div>
      <div class="col-md-9">
        <input type="text" class="form-control" id="school" aria-describedby="school" placeholder="School">
      </div>
    </div>

    <div>
      <p>Would you prefer that we communicate with you by E-Mail regarding special events pretaining to your child? If yes, provide email below</p>
    </div>
    <div class="form-group row">
      <div class="col-md-3">
        <label for="email">Email</label>
      </div>
      <div class="col-md-9">
        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
      </div>
    </div>

    <div>
      <p>Please provide the following information for each child to be registered in Religious Education:</p>
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
          <label for="childOneName">Name</label>
          <input type="text" class="form-control" id="childOneName" aria-describedby="childOneName" placeholder="Name">
      </div>
      <div class="form-group col-md-3">
          <label for="childOneBirth">Date of Birth</label>
          <input type="text" class="form-control" id="childOneBirth" aria-describedby="childOneBirth" placeholder="Date of Birth">
      </div>
      <div class="form-group col-md-3">
          <label for="childOneBaptize">Location of Baptism</label>
          <input type="text" class="form-control" id="childOneBaptize" aria-describedby="childOneBaptize" placeholder="Location of Baptism">
      </div>
      <div class="form-group col-md-3">
          <label for="childOneGrade">Grade</label>
          <input type="text" class="form-control" id="childOneGrade" aria-describedby="childOneGrade" placeholder="Grade">
      </div>
      <div class="form-group col-md-3">
          <label for="childTwoName">Name</label>
          <input type="text" class="form-control" id="childTwoName" aria-describedby="childTwoName" placeholder="Name">
      </div>
      <div class="form-group col-md-3">
          <label for="childTwoBirth">Date of Birth</label>
          <input type="text" class="form-control" id="childTwoBirth" aria-describedby="childTwoBirth" placeholder="Date of Birth">
      </div>
      <div class="form-group col-md-3">
          <label for="childTwoBaptize">Location of Baptism</label>
          <input type="text" class="form-control" id="childTwoBaptize" aria-describedby="childTwoBaptize" placeholder="Location of Baptism">
      </div>
      <div class="form-group col-md-3">
          <label for="childTwoGrade">Grade</label>
          <input type="text" class="form-control" id="childTwoGrade" aria-describedby="childTwoGrade" placeholder="Grade">
      </div>
      <div class="form-group col-md-3">
          <label for="childThreeName">Name</label>
          <input type="text" class="form-control" id="childThreeName" aria-describedby="childThreeName" placeholder="Name">
      </div>
      <div class="form-group col-md-3">
          <label for="childThreeBirth">Date of Birth</label>
          <input type="text" class="form-control" id="childThreeBirth" aria-describedby="childThreeBirth" placeholder="Date of Birth">
      </div>
      <div class="form-group col-md-3">
          <label for="childThreeBaptize">Location of Baptism</label>
          <input type="text" class="form-control" id="childThreeBaptize" aria-describedby="childThreeBaptize" placeholder="Location of Baptism">
      </div>
      <div class="form-group col-md-3">
          <label for="childThreeGrade">Grade</label>
          <input type="text" class="form-control" id="childThreeGrade" aria-describedby="childThreeGrade" placeholder="Grade">
      </div>
      <div class="form-group col-md-3">
          <label for="childFourName">Name</label>
          <input type="text" class="form-control" id="childFourName" aria-describedby="childFourName" placeholder="Name">
      </div>
      <div class="form-group col-md-3">
          <label for="childFourBirth">Date of Birth</label>
          <input type="text" class="form-control" id="childFourBirth" aria-describedby="childFourBirth" placeholder="Date of Birth">
      </div>
      <div class="form-group col-md-3">
          <label for="childFourBaptize">Location of Baptism</label>
          <input type="text" class="form-control" id="childFourBaptize" aria-describedby="childFourBaptize" placeholder="Location of Baptism">
      </div>
      <div class="form-group col-md-3">
          <label for="childFourGrade">Grade</label>
          <input type="text" class="form-control" id="childFourGrade" aria-describedby="childFourGrade" placeholder="Grade">
      </div>
      <div class="form-group col-md-3">
          <label for="childFiveName">Name</label>
          <input type="text" class="form-control" id="childFiveName" aria-describedby="childFiveName" placeholder="Name">
      </div>
      <div class="form-group col-md-3">
          <label for="childFiveBirth">Date of Birth</label>
          <input type="text" class="form-control" id="childFiveBirth" aria-describedby="childFiveBirth" placeholder="Date of Birth">
      </div>
      <div class="form-group col-md-3">
          <label for="childFiveBaptize">Location of Baptism</label>
          <input type="text" class="form-control" id="childFiveBaptize" aria-describedby="childFiveBaptize" placeholder="Location of Baptism">
      </div>
      <div class="form-group col-md-3">
          <label for="childFiveGrade">Grade</label>
          <input type="text" class="form-control" id="childFiveGrade" aria-describedby="childFiveGrade" placeholder="Grade">
      </div>
    </div>
    <div>
      <p>If your child was not baptized at St. Andrew Church, St. Patrick Church or Our Lady of the Snows Church, please provide us with a copy of his/her Baptismal Certificate, if you have not already done so.<br>
         Registration Fee: $15 per child; family maximum of $30. Please send your payment to the rectory.</p>
    </div>
    <div>
      <p>Please enter any comments or questions you may have in the box below!</p>
    </div>
    <div class="form-group row">
      <div class="col-md-12">
        <textarea class="form-control" id="comments" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-8">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
    </div>
  </fieldset>
</form> -->
