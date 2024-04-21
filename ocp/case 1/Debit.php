<?php

require_once 'TipePembayaran.php';

class Debit extends TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Debit';
    }
}