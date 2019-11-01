<?php 

class Bus extends Car implements iCar {

	function __construct($owner, $price) {
		parent::__construct($owner, $price);
		$this->category = "D";

		echo "<p class='service'>Bus was created. </p>";
	}

	public function buy($buyer) {
		if (in_array($this->category, $buyer->category)) {
			if ($buyer->spendMoney($this->price)) {
				$this->setOwner($buyer);
				echo "<p class='success'>Bus successfully purchased. </p>";
			} else {
				echo "<p class='err'>You don\'t have enough money to purchase Bus. </p>";
			}
		} else {
			echo "<p class='err'>You can not purchase this Bus because your category does not correspond to the category of purchased transport.</p>";
		}
	}
}
