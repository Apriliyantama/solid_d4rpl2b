<?php

require_once 'TipePembayaran.php';

class Debit implements TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Debit';
    }
}