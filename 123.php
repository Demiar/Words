<?php
header("Content-Type: text/html; charset=utf-8");
$myWord = "абат";
$dbWord = array();

$connect = mysqli_connect("localhost", "root", "", "dictionary");
$aaa = 'SELECT word FROM words';
$query = mysqli_query($connect, $aaa);

while ($row = mysqli_fetch_assoc($query)) {
    $dbWord[] = $row;
}

function ssplit($someWord){
	$array = str_split($someWord, 2);
	return $array;
}
$myWordArray = ssplit($myWord);
function arra($dbWord, $myWordArray){
	$result = array();
	foreach ($dbWord as $key => $value) {
		$aabb = implode("", $value);
		$dbWordArray = array();
		$dbWordArray = str_split($aabb, 2);
		$keys = array_search($dbWordArray, $myWordArray);
		unset($myWordArray[$keys]);
		unset($dbWordArray[$key]);
		if (count($dbWordArray) == 0) {
			
		}
	}	
}


arra($dbWord, $myWordArray);
?>