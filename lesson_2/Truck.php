<?php 

class Truck extends Car implements iCar {

	function __construct($owner, $price) { 
		parent::__construct($owner, $price);
		$this->category = "C";

		echo "<p class='service'>Truck was created. </p>";
	}

	public function buy($buyer) {
		if (in_array($this->category, $buyer->category)) {
			if ($buyer->spendMoney($this->price)) {
				$this->setOwner($buyer);
				echo "<p class='success'>Truck successfully purchased. </p>";
			} else {
				echo "<p class='err'>You don\'t have enough money to purchase Truck. </p>";
			}
		} else {
				echo "<p class='err'>You can not purchase this Truck because your category does not correspond to the category of purchased transport.</p>";
		}
	}	
}