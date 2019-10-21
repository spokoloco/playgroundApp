<?php
//Pull in includes that are needed on every page.
include($_SERVER['DOCUMENT_ROOT'] . '/includes.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <title>Submit This Form!</title>
  </head>

  <body>
  
  <?php include('nav.php'); ?>
  
  <main role="main" class="container">
<?php if ($_GET['added']) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Form Submitted Successfully!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
<?php } ?>
<h1>Please Fill Out This Form</h1>
  <form action="/action/submit.sampleForm.php" method="post">
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control .form-control-sm" id="inputName" name="inputName" placeholder="Enter Your Name">
    <small id="emailHelp" class="form-text text-muted">Who are you?</small>
  </div>
  <div class="form-group">
    <label for="inputColor">Favorite Color</label>
    <input type="text" class="form-control .form-control-sm" id="inputColor" name="inputColor" placeholder="Red, or Blue, or Whatever">
    <small id="emailHelp" class="form-text text-muted">We like to know the little details about you.</small>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email Address</label>
    <input type="email" class="form-control .form-control-sm" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter Your Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
      <label for="inlineRadioOptions">Pick a Number</label>
      <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
  <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
  <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" >
  <label class="form-check-label" for="inlineRadio3">3</label>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</main>


  <?php include('footer.php'); ?>
</body>
<script src="JS/sampleForm.js"></script>
</html>