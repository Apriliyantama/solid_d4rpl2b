<?php

include_once "KendaraanListrik.php";

class MobilListrik extends KendaraanListrik {
    public function menggunakanBBM(): void
    {
        echo "Mobil listrik menggunakan baterai\n";
    }
}