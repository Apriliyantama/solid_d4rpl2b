<?php

require_once 'TipePembayaran.php';

class Kredit implements TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Kredit';
    }
}