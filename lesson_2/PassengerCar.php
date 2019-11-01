<?php 

class PassengerCar extends Car implements iCar {

	function __construct($owner, $price) { 
		parent::__construct($owner, $price);
		$this->category = "B";

		echo "<p class='service'>Passenger Car was created. </p>";
	}

	public function buy($buyer) {
		if (in_array($this->category, $buyer->category)) {
			if ($buyer->spendMoney($this->price)) {
				$this->setOwner($buyer);
				echo "<p class='success'>Passenger Car successfully purchased. </p>";
			} else {
				echo "<p class='err'>You don't have enough money to purchase Passenger Car. </p>";
			}
		} else {
				echo "<p class='err'>You can not purchase this Passenger Car because your category does not correspond to the category of purchased transport.</p>";
		}
	}
}