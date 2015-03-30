<?php

include_once"creador.php";


$NewBase=new creador();

$NewBase->host = "localhost";
$NewBase->user = "root";
$NewBase->pass = "";
$NewBase->DBname = "Proyecto";

$NewBase->DBCreator();

?>
