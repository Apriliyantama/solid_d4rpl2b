<?php

require_once 'TipePembayaran.php';

class Kredit extends TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Kredit';
    }
}