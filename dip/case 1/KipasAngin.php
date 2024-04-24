<?php

require_once "BarangElektronik.php";

class KipasAngin extends BarangElektronik {
    public function beroperasi(): void
    {
        echo "Kipas angin menyala";
    }
    public function berhenti(): void
    {
        echo "Kipas angin mati";
    }
}