<?php

include_once "case 1/Kubus.php";
include_once "case 1/Persegi.php";

echo"--case 1--\n";
$flat = new Persegi2();
$flat->calculateArea();

$volume = new Kubus();
$volume->calculateArea();
$volume->calculateVolume();