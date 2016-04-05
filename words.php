<?php
include_once("ConnectDB.php");
include_once("engine.php");
$connect = new ConnectDB();
$connect -> connect();
if($connect == false){
	mysqli_error($connect);
}
$query = "SELECT * FROM words ORDER BY word";

$search = new search();
$search->myWord = "Аппелиция";
$search->dbWord =$query;
$search->split($myWord);
$search->searching();

?>

