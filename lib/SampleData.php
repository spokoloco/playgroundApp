<?php 


//This class will be used to pull in data to make the playground functional.  For a real-life application, a database would be used for data persistance.
class SampleData {
    private $dataType;
    private $data_ToDo = [
        ["ToDo" => "Buy Milk", "completed" => 0],
        ["ToDo" => "Write Some Code","completed" =>  0],
        ["ToDo" => "Take Out the Trash", "completed" => 1],
        ["ToDo" => "Seize the Day", "completed" => 0]
    ];
    private $data_Person = [
        ["name" => "John", "color" => "red", "email" => "email@email.email", "number" => 3],
        ["name" => "Jane", "color" => "yellow", "email" => "email@email.email", "number" => 2],
        ["name" => "Sally", "color" => "blue", "email" => "email@email.email", "number" => 3]
    ];
    
    public function __construct($dataType) {
        $this->dataType = $dataType;
    }

    public function getData() {
        $varName = "data_".$this->dataType;
        return $this->$varName;
    }
}