<?php
class ConnectDB{
var $login = "root";
var $password = "";
var $db = "dictionary";
var $host = "localhost";
var $connect = NULL;

	function connect(){
		$this->connect = mysqli_connect($this->host, $this->login, $this->password, $this->db);
	}

	function query(){
		return $this->ConnectDB->query();
	}
}
?>