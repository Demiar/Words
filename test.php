<?php
header("Content-Type: text/html; charset=utf-8");


function connect(){
$host = "localhost";
$login = "root";
$password = "";
$db = "dictionary";
$connect = mysqli_connect($host, $login, $password, $db);
$test = file("OZHEGOV.txt");

	foreach ($test as $key => $value) {
	$result = strstr($value, "||", true);
	$query = "INSERT INTO words(word) VALUES('$result')";
	$save = mysqli_query($connect, $query);
	
	}

}

connect();

?>