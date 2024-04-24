<?php

include_once "case 1/Kubus.php";
include_once "case 1/Persegi.php";
include_once "case 2/PrinterFlagship.php";
include_once "case 2/PrinterMidRange.php";
include_once "case 2/PrinterEntryLevel.php";

echo "--case 1--\n";
$flat = new Persegi2();
$flat->calculateArea();

$volume = new Kubus();
$volume->calculateArea();
$volume->calculateVolume();
echo "--case 2--\n";
$flagship = new PrinterFlagship();
$flagship->cetakKertas();
$flagship->terimaFax();
$flagship->scanKertas();

$mid = new PrinterMidRange();
$mid->cetakKertas();
$mid->scanKertas();

$entry = new PrinterEntryLevel();
$entry->cetakKertas();