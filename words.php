<?php
include_once("ConnectDB.php");
include_once("engine.php");

$server = "localhost";
$login = "root";
$password = "";
$db = "dictionary";

//массив с буквами моего слова
$myWord = "улицантодмрнаннаяя";
$search = new search();
$myLetterArray = $search->spliter($myWord);

//массив со словами из базы
$connect = new mysqli($server, $login, $password, $db);

if ($connect->connect_error) {
    die('Ошибка подключения (' . $connect->connect_errno . ') '
            . $connect->connect_error);
}

if ($result = $connect->query("SELECT word FROM words")) {
	while ($row = mysqli_fetch_assoc($result)) {
    	$dbWordArray[] = $row;
	}
}

foreach ($dbWordArray as $key => $word) {
	$word = implode("", $word);
	$dbLetterArray = $search->spliter($word);
	$ok = $search->searching($myLetterArray, $dbLetterArray);
	if($ok !== NULL){
		$ok = implode("", $ok);
		echo $ok."<br>";
	}
}



?>

