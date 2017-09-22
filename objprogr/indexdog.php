<?php
include "Dog.php";

$suo = new Dog("Edvinas", "Bob");

$suo->owner = "Edvinas";
$suo->color = "black";
$suo->name = "Bob";
$suo->size = "big";
$suo->breed = "taxas";

$suo->walk("park");
$suo->eat();
$suo->sleep();
$suo->bark();
$suo->shit();
$suo->destroy();

