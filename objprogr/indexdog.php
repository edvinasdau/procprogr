<?php
include "Dog.php";

$suo = new Dog("Edvinas", "Mikis");

$suo->owner = "Edvinas";
$suo->color = "black";
$suo->name = "Mikis";
$suo->size = "big";
$suo->breed = "taxas";

$suo->walk();
$suo->eat();
$suo->sleep();
$suo->bark();
$suo->destroy();
$suo->breed;
$suo->color;