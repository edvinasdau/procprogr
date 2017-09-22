<?php
include "Car.php";

$edvino_automobilis = new Car("RAE 423", "Edvinas");


$edvino_automobilis->color = "red";
$edvino_automobilis->make = "Toyota";
$edvino_automobilis->model = "Yaris";
$edvino_automobilis->fuel = "diesel";
//$edvino_automobilis->license = "RAE 423";

//var_dump($edvino_automobilis);

//echo $edvino_automobilis->license;

$marytes_automobilis = new Car("MAR 767", "Maryte");
//$marytes_automobilis->license = "MAR 767";

$edvino_automobilis->go();
$edvino_automobilis->crash();
$edvino_automobilis->repair();

//echo $edvino_automobilis->license;

echo $marytes_automobilis->owner;