<?php

function __autoload($classname) {
    $filename = $classname .".php";
    include_once($filename);
}


$NewBase=new creador();

$NewBase->host = "localhost";
$NewBase->user = "root";
$NewBase->pass = "";
$NewBase->DBname = "Proyecto";

$NewBase->DBCreator();

?>
