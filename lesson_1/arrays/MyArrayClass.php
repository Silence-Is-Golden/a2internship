<?php 

	namespace MyArray;

	class MyArrayClass implements MyArrayInterface {

		public function isEmpty(array $array) {
			$var = count($array) === 0;
			return $var;
		}

		public function summary(array $array) {
			foreach ($array as $item) {
				$amount += $item;
			}

			return $amount;
		}

		public function summaryOfMinAndMax(array $array) {
			$min = PHP_INT_MAX;
			$max = PHP_INT_MIN;

			foreach ($array as $item) {
				if ($item < $min) $min = $item;
				if ($item > $max) $max = $item;
			}
			return $min + $max;
		}

		public function myRevert(array $array) {
			for ($index = 0; $index < count($array) / 2; $index++) {
				$tmp = $array[$index];
				$array[$index] = $array[count($array) - $index - 1];
				$array[count($array) - $index - 1] = $tmp;
			}

			return $array;
		}

		public function mySort(array $array) {
			$needIteration = true;
			while ($needIteration) {
				$needIteration = false;
				for ($i = 1; $i < count($array); $i++) {
					if ($array[$i] < $array[$i - 1]) {
						$tmp = $array[$i];
						$array[$i] = $array[$i - 1];
						$array[$i - 1] = $tmp;

						$needIteration = true;
					}
				}
			}

			return $array;
		}

		public function getItemsChain(array $array) {
			return implode("-", $array);
		}

		public function putWordInTheMiddle(array $array, string $word) {
			array_splice(
				$array, 
				(count($array) - count(str_split($word))) / 2, 
				count(str_split($word)), 
				$word
			);
			return $array;
		}
	}
?>