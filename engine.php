<?php
class search{
var $myWord = "";
var $dbWord = array();


	function split($someWord){
		$array = str_split($someWord);
		return $array;
	}


	function searching($myWord, $dbWord){
		foreach ($dbWord as $key => $value) {
			$result = $dbWord;
			$dbWordArray = split($value);
			$keys = array_search("$dbWordArray", $myWord);
			unset($myWord["$keys"]);
			unset($dbWordArray["$key"]);
			if (count($dbWordArray) == 0) {
				return $result;
			}
		}
	}

}
?>