<?php
class creador {

	public $host;
	public $user;
	public $pass;
	public $DBname;

	function connect (){
		$conection=mysql_connect($this->host,$this->user,$this->pass);
		if(!$conection){
			die("Connection error ".mysql_error());
		}
		return $conection;
	}
	function DBCreator (){
		$conection=$this->connect();
		if(!$conection){
			die("Connection error ".mysql_error());
		}

		mysql_query("CREATE DATABASE ".$this->DBname,$this->connect());
		mysql_close($this->connect());
	}
}
?>
