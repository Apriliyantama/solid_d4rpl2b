<?php

require_once 'Persegi.php';

class PenghitungPersegi {
    public function hitungLuas(Persegi $persegi) {
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}