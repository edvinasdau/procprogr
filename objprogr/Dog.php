<?php

class Dog {

	public $owner;
	private $color;
	public $name;
	public $size;
	private $breed;


	public function __construct($a1, $a2){ //Owner, name
	$this->owner = $a1;
	$this->name = $a2;
	echo $this->owner . " just got a dog named " . $this->name . "<br>";
}

public function __set($parameter, $value) {
	echo "Someone changed the $parameter of my dog to $value .<br>";
	$this->$parameter = $value;
}



public function __get($parameter){
	echo "Someone is checking the $parameter of this dog. <br>" ;
		return $this->$parameter;
}

public function eat($what){
	
}

public function sleep($where){
	
}

public function destroy($what){
	
}

public function bark($how){
	
}
}