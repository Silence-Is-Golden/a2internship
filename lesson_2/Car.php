<?php 

class Car {

	private $owner;
	public $price;

	public $category;

	function __construct($owner, $price) {
		$this->owner = $owner;
		$this->price = $price; 
	}

	public function getOwner() {
		return $this->owner->name;
	}
	protected function setOwner($newOwner) {
		$this->owner = $newOwner;
	}
}
