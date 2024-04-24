<?php

require_once "BarangElektronik.php";

class Lampu extends BarangElektronik{
    public function beroperasi(): void
    {
        echo "Lampu menyala";
    }
    public function berhenti(): void
    {
        echo "Lampu mati";
    }
}