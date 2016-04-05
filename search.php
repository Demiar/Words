<?php
$myWord = "вареники";
$dbWord = "раени";
class searchWord{

	function split($someWord){
		$array = str_split($someWord);
		return $array;
	}

	function intersect($dbWord, $myWord){
		$number  = count($dbWord);
		$result = array_intersect($dbWord, $myWord);
		$number2 = count($result);
		if($number == $number2){
			return $result;
		}
	}


}

$test = new searchWord;
$test1 = $test -> split($myWord);
$test2 = $test -> split($dbWord);
$array = $test -> intersect($test2, $test1);
if(!empty($array)){
	$array = implode("", $array);
	echo $array;
}else{
	echo "пусто";
}
?>