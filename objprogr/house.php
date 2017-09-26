<?php

class House {

	private $owner;
	public $color;
	public $address;
	public $size;
	private $price;


	public function __construct($a1, $a2){ //Owner, name
	$this->owner = $a1;
	$this->address = $a2;
	echo $this->owner . " lives at " . $this->address . "<br>";
	}

	public function __set($parameter, $value) {
		echo "The $parameter of the house is $value .<br>";
		$this->$parameter = $value;
	}


	public function __get($parameter){
		echo "Someone is checking the $parameter of the house. <br>" ;
			return $this->$parameter;
	}

	public function build(){
		echo "The house was built in 2015 at " . $this->address .".<br>";
	}

	public function buy(){
		echo $this->owner . " has bought the house.<br>";
	}

	public function paint(){
		echo $this->owner . " painted the house " . $this->color . ".<br>";
	}

	public function destroy(){
		echo  "The house was destroyed. <br>";
	}

	public function rebuild(){
		echo "The house was rebuilt. <br>";
	}

}