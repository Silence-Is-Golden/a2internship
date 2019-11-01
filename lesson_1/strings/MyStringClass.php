<?php 
	
	namespace MyString;

	class MyStringClass implements MyStringInterface {

		public function uppercaseWords(string $string) {
			return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
		}

		public function subStringsCount(string $subString, string $string) {
			return substr_count($string, $subString);
		}
	}
	
?>