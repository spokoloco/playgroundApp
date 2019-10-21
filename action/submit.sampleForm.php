<?php
//Pull in includes that are needed on every page.
include($_SERVER['DOCUMENT_ROOT'] . '/includes.php');

//Sanitize the input
$name = filter_var($_POST['inputName'], FILTER_SANITIZE_STRING);
$color = filter_var($_POST['inputColor'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['inputEmail'], FILTER_SANITIZE_EMAIL);
$number = filter_var($_POST['inlineRadioOptions'], FILTER_SANITIZE_NUMBER_INT);

$Person = new Person($name);
$Person->addFavoriteColor($color);
$Person->addEmail($email);
$Person->addNumber($number);

header("Location:/sampleForm.php?added=1");