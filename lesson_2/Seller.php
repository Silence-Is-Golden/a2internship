<?php

class Seller extends User {

	public $ownedCars = [];

	function __construct($name) {
		parent::__construct($name);

		echo "<p class='service'>Seller " . $this->name . " was created. </p>";
	}
}