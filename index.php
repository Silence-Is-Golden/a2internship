<?php 

	include 'lesson_1\arrays\MyArrayInterface.php';
	include 'lesson_1\arrays\MyArrayClass.php';
	include 'lesson_1\strings\MyStringInterface.php';
	include 'lesson_1\strings\MyStringClass.php';

	include 'lesson_2\iCar.php';
	include 'lesson_2\Car.php';
	include 'lesson_2\Bus.php';
	include 'lesson_2\PassengerCar.php';
	include 'lesson_2\Truck.php';
	include 'lesson_2\User.php';
	include 'lesson_2\Buyer.php';
	include 'lesson_2\Seller.php';

	include 'lesson_3\Database.php';

	use DataBase as db;

?>

<!DOCTYPE html>
<html>
<head>
	<title>A2 Internship</title>
</head>
<style type="text/css">
	.err { color: red; }
	.success { color: green; }
	.service { color: blue; }
</style>
<body style="font-family: sans-serif;">
	<?php

		echo "<h1>Internship</h1>";

		echo "<hr>";

		echo "<h2>Lesson 1</h2>";

		$a = new MyArray\MyArrayClass();
		$s = new MyString\MyStringClass();

		$word = "WORD";
		$arrayNumbers = [1, 2, 3, 4, 5, 4, 3, 2, 1, 10, 20, 30];
		$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
		$subString = "et";

		//isEmpty
		echo "<p>Is arrayNumbers empty? ";
		var_dump($a->isEmpty($arrayNumbers));
		echo "</p>";

		//summary
		echo "<p>Summary: " . $a->summary($arrayNumbers) . "</p>";

		//summaryOfMinAndMax
		echo "<p>SummaryOfMinAndMax: " . $a->summaryOfMinAndMax($arrayNumbers) . "</p>";

		//myRevert
		echo "<p>MyRevert: " . implode(" ", $a->myRevert($arrayNumbers)) . "</p>";

		//mySort
		echo "<p>MySort: " . implode(" ", $a->mySort($arrayNumbers)) . "</p>";

		//getItemsChain
		echo "<p>GetItemsChain: " . $a->getItemsChain($arrayNumbers) . "</p>";

		//putWordInTheMiddle
		echo "<p>PutWordInTheMiddle: " . implode(" ", $a->putWordInTheMiddle($arrayNumbers, $word)) . "</p>"; 

		//uppercaseWords
		echo "<p>UppercaseWords: " . $s->uppercaseWords($string) . "</p>";

		//subStringsCount
		echo "<p>SubStringsCount: " . $s->subStringsCount($subString, $string) . "</p>";

		echo "<hr>";

		echo "<h2>Lesson 2</h2>";

		$seller = new Seller("Иннокентий Артёмович");
		$buyer = new Buyer("Василий Игоревич", array("B", "D"), 40000);

		$bus = new Bus($seller, 10000);
		$truck = new Truck($seller, 25000);
		$pcar = new PassengerCar($seller, 35000);

		$bus->buy($buyer);
		$truck->buy($buyer);
		$pcar->buy($buyer);

		echo "<p>Current balance: " . $buyer->getMoney() . "</p>";

		echo "<p>Bus owner: " . $bus->getOwner() . "</p>";
		echo "<p>Truck owner: " . $truck->getOwner() . "</p>";
		echo "<p>PassengerCar owner: " . $pcar->getOwner() . "</p>";

		echo "<p>Implemented interfaces: ";
		print_r(class_implements($bus));
		echo "</p>";

		echo "<hr>";

		echo "<h2>Lesson 3</h2>";

		$config = [
			'host' => 'localhost',
			'dbname' => 'lesson3',
			'user' => 'root',
			'password' => ''
		];
		$selectQueryWithoutData = '
			SELECT * 
			FROM users';
		$selectQueryWithData = '
			SELECT * 
			FROM users 
			WHERE age = :age';
		$selectQueryData = [ 
			':age' => 20
		];
		$insertQueryWithoutData = "
			INSERT INTO users (name, surname, age) VALUES 
			('Andrey', 'Andreev', 20),
			('Alexey', 'Alexeev', 27)
		";
		$insertQueryWithData = "
			INSERT INTO users (name, surname, age) VALUES
			(:name, :surname, :age)
		";
		$insertQueryData = [
			':name' => 'Dmitriy',
			':surname' => 'Dmitriev',
			':age' => 20 
		];

		$db = new db\DataBase($config);

		$db->execute($insertQueryWithoutData);
		$db->execute($insertQueryWithData, $insertQueryData);

		print_r($db->execute($selectQueryWithoutData));
		echo "<br>";
		print_r($db->execute($selectQueryWithData, $selectQueryData));

	?>
</body>
</html>