<?php 

class Person {
    private $name;
    private $email;
    private $favoriteColor;
    private $number;

    public function __construct($name) {
        $this->name = $name;
    }

    public function addFavoriteColor($color) {
        $this->favoriteColor = $color;
        error_log("favorite color added");
        return 1;
    }

    public function addEmail($email) {
        $this->email = $email;
        error_log("email added");
        return 1;
    }

    public function addNumber($number) {
        $this->number = $number;
        error_log("number added");
        return 1;
    }
}