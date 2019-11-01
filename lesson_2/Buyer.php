<?php 

class Buyer extends User {

	private $money;
	public $category = [];

	function __construct($name, $category, $money) {
		parent::__construct($name);
		$this->category = $category;
		$this->money = $money;

		echo "<p class='service'>Buyer " . $this->name . " was created. </p>";
	}

	public function spendMoney($money) {
		if ($this->money >= $money) {
			$this->money -= $money;
			return true;
		}
		return false;
	}

	public function getMoney() {
		return $this->money;
	}
}