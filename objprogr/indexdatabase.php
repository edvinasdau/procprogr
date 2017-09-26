<?php 
include "database.php";

$db = new Database();
$products = $db->select_array("SELECT * FROM products");

foreach ($products as $product) {
	echo $product["name"] . "<br>";
}