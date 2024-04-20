<?php

require_once 'case 1/Persegi.php';
require_once 'case 1/PenghitungPersegi.php';
require_once 'case 2/Mahasiswa.php';
require_once 'case 2/MahasiswaView.php';

echo "--case 1-- ";
// membuat object persegi dengan sisi 4
$persegi = new Persegi(4);
// membuat objek penghitung persegi
$penghitung = new PenghitungPersegi();
// menghitung luas
$luas = $penghitung->hitungLuas($persegi);
//output
echo "Luas persegi dengan sisi {$persegi->getSisi()} adalah: $luas.\n";

echo "--case 2--";
$mhs = new Mahasiswa('2205044', 'Koko Apriliyantama');
echo " NIM Mahasiswa {$mhs->getNim()} nama {$mhs->getNama()}";