<?php


class ToDo {
    private $a_toDoItems = [];
    public function __construct() {
        //Use sample data to populate in lieu of setting up a database connection
        //For real application, this should be pulled from a DB to save info.
        $SampleData = new SampleData('ToDo');
        $this->a_toDoItems = $SampleData->getData();
    }

    public function getToDoItems() {
        return $this->a_toDoItems;
    }

    //As implemented, this function doesn't do anything useful. 
    //In a real-world scenario this would write to a DB for persistance.
    public function addToDoItem($text) {
        $this->a_toDoItems[] = ["ToDo" => $text, "completed" => 0];
        error_log("New ToDo Item added");
        return 1;
    }



}