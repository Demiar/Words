<?php
class search{
var $myWord = "";
var $dbWord = array();

	//разделяем на буквы
	function spliter($someWord){
		$array = str_split($someWord,2);
		return $array;
	}

	//сравниваем буквы в массивах
	function searching($myWordLetters, $dbWordLetters){
		$result = $dbWordLetters;
		foreach ($dbWordLetters as $key => $value) {
			$search = array_search($value, $myWordLetters);
			if($search !== false){
				unset($myWordLetters["$search"]);
				unset($dbWordLetters["$key"]);
			}
			if(count($dbWordLetters) == 0){
				return $result;
			}
		}

		/*$result = array();
		foreach ($dbWord as $key => $value) {
			$result = $dbWord;
			$dbWordArray = split($value);
			$keys = array_search("$dbWordArray", $myWordArray);
			unset($myWordArray["$keys"]);
			unset($dbWordArray["$key"]);
			if (count($dbWordArray) == 0) {

				return $result;
			}
		}*/
	}

}
?>