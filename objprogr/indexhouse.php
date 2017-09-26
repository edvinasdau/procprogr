<?php
include "House.php";

$namas = new House("Edvinas", "Vilnius, Vilniaus g.");

$namas->owner = "Edvinas";
$namas->color = "yellow";
$namas->address = "adresas";
$namas->size = "big";
$namas->price = "100000";

$namas->build();
$namas->buy();
$namas->paint();
$namas->destroy();
$namas->rebuild();
$namas->owner;
$namas->price;