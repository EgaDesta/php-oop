<?php
require_once "index.php";

$robot1 = new robot ('devan') ;
$robot2 = new robot ('reno');
// echo "nama robotku ".$robot1->name ." ukuranya ".$robot1->size;
// echo "<br>";
// $robot1->bentuknya();
// echo "ukuranya sangat ".$robot1->size();
// $robot1->set_name("ega");
// echo "namanya ". $robot1->get_name() ;
$robot1->set_name("devan");
$robot2->set_name("reno");
echo "namnya ". $robot1->get_name(). "<br>";
echo "namnya ". $robot2->get_name(). "<br>";
?>
