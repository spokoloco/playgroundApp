$(function() {

//Functionality for when a delete ToDo button is clicked
$("#toDoContainer").on("click", ".deleteToDo", function() {
    $(this).closest(".toDoItem").remove();
});

$("#addToDo").click(function() {
    $.ajax({
        type:"POST",
        url:"ajax/addToDoItem.php",
        data:{
           text: $("#addToDoText").val()
        },
        success:function(data){
           $("#toDoContainer").append(data);
        }
     });    
});

});