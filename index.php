<?php
//Pull in includes that are needed on every page.
include($_SERVER['DOCUMENT_ROOT'] . '/includes.php');

//Set up data for use in page.
$ToDo = new ToDo();
$a_toDoListItems = $ToDo->getToDoItems();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <title>Welcome to the Playground!</title>
  </head>

  <body>

<?php include('nav.php'); ?>

<main role="main" class="container">
<div class="mainBlock">
<div class="jumbotron">
  <h1 class="display-4">Simple ToDo List</h1>
</div>
<div id="toDoContainer">
<?php foreach ($a_toDoListItems as $a_toDoListItem) { 
    if($a_toDoListItem['completed']) {
        $checked = "checked";
    } else {
        $checked = "";
    }
?>

<div class="mb-2 toDoItem" >
<input type="checkbox" <?php echo $checked; ?> />
<input type="text" value="<?php echo $a_toDoListItem['ToDo'] ?>" readonly>
<button class="btn btn-danger deleteToDo">Delete</button>
</div>

<?php } ?>
</div>

<hr>
<div class="" >
    <input id="addToDoText" type="text" value="" placeholder="Add ToDo" />
    <button id="addToDo" class="btn btn-success">Submit</button>
</div>

  </div>

</main>

<?php include('footer.php'); ?>
</body>
<script src="JS/index.js"></script>
</html>