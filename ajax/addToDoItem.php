<?php
//Pull in includes that are needed on every page.
include($_SERVER['DOCUMENT_ROOT'] . '/includes.php');

//Sanitize the input
$input = filter_var($_POST['text'], FILTER_SANITIZE_STRING);

$ToDo = new ToDo();
$ToDo->addToDoItem($input);

?>
<div class="mb-2 toDoItem" >
<input type="checkbox" />
<input type="text" value="<?php echo $input ?>" readonly>
<button class="btn btn-danger deleteToDo">Delete</button>
</div>