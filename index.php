<?php
$myWord = array('а','и','с');
$dbWord = array('а','с');

function arra($myWord, $dbWord){
	foreach ($dbWord as $key => $value) {
		$result = $dbWord;
		$keys = array_search("$value", $myWord);
		unset($myWord["$keys"]);
		unset($dbWord["$key"]);
		if (count($dbWord) == 0) {
			return $result;
		}
	}

}

var_dump(arra($myWord, $dbWord));

?>