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
		echo "The $parameter of my dog is $value .<br>";
		$this->$parameter = $value;
	}


	public function __get($parameter){
		echo "Someone is checking the $parameter of this dog. <br>" ;
			return $this->$parameter;
	}

	public function walk(){
		echo $this->name . " walks with " . $this->owner ." everyday.<br>";
	}

	public function eat(){
		echo $this->name . " eats a lot of meat.<br>";
	}

	public function sleep(){
		echo $this->name . " sleeps everywhere.<br>";
	}

	public function destroy(){
		echo $this->name . " destroys everything.<br>";
	}

	public function bark(){
		echo $this->name . " barks very loudly.<br>";
	}

}