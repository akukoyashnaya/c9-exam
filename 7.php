<?php
include 'App/Human.php';

$billGates = new App\Human('bill gates', 61);
$name = $billGates->getFirstName()." ".$billGates->getLastName();
echo $name . " is " . $billGates->getAge() . " years old (born ". $billGates->getBirthYear() . ").";

