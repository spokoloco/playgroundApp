<?php 
//Pull in includes that are needed on every page.
include($_SERVER['DOCUMENT_ROOT'] . '/includes.php');

//Sanitize the input
$searchTerm = filter_var($_POST['Search'], FILTER_SANITIZE_STRING);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <title>Search Result!</title>
  </head>

  <body>
  
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/nav.php'); ?>
  
  <main role="main" class="container">
  <div class="jumbotron">
  <h1 class="display-4">Nice Search!</h1>
  <p class="lead">You searched for "<?php echo $searchTerm; ?>".  You really know what you're doing!</p>

</div>

</main>


  <?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</body>
</html>