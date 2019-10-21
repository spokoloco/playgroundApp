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

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Playground</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sampleForm.php">Submit Form</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

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

<footer class="footer">
      <div class="container">
        <span class="text-muted">You've reached the end of the page. :(  Maybe go back to the top and start over?</span>
      </div>
    </footer>
</body>
<script src="JS/index.js"></script>
</html>