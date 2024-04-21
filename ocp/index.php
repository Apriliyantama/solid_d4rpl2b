<?php

require_once 'case 1/Cash.php';
require_once 'case 1/Debit.php';
require_once 'case 1/Kredit.php';
require_once 'case 1/PembayaranCustomer.php';
require_once 'case 1/TipePembayaran.php';
require_once 'case 2/DBMS.php';
require_once 'case 2/DBMSConnection.php';
require_once 'case 2/MongoDB.php';
require_once 'case 2/MySQL.php';

echo "--case 1--:\n";
// membuat instance dari kelas pembayaran
$cash = new Cash();
$debit = new Debit();
$kredit = new Kredit();
// membuat instance dari kelas pembayaranCustomer
$pembayaranCustomer = new PembayaranCustomer();
// memproses pembayaran
echo "metode pembayaran :\n";
$pembayaranCustomer->menerimaPembayaran($cash);

echo "\n";
$pembayaranCustomer->menerimaPembayaran($debit);

echo "\n";
$pembayaranCustomer->menerimaPembayaran($kredit);

echo "\n";
echo "--case 2--\n";
// instance dari kelas database
$mongodb = new mongodb();
$mysql = new mysql();
// instance dari kelas dbmsconnection
$dbmsconnection = new DBMSconnection();
// output
echo "metode koneksi database :\n";
$dbmsconnection->connect($mongodb);
echo "\n";
$dbmsconnection->connect($mysql);