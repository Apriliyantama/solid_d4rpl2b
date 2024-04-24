<?php

//require_once 'case 1/SocialMedia.php';
require_once 'case 1/Instagram.php';
require_once 'case 1/WhatsApp.php';
require_once 'case 2/Mobil.php';
require_once 'case 2/MobilListrik.php';

//$medsos = new SocialMedia();
$ig = new Instagram();
$wa = new WhatsApp();

echo "--case 1--:\n";
//$medsos->chat();
//$medsos->sendPhotosAndVideos();

$ig->chat();
$ig->sendPhotosAndVideos();
$ig->publishPost();

$wa->chat();
$wa->sendPhotosAndVideos();
$wa->callGroupVideo();
echo "--case 2--:\n";

$mobil = new Mobil();
$listrik = new MobilListrik();

$mobil->menggunakanBBM();
$listrik->menggunakanBaterai();