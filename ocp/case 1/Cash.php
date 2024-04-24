<?php

require_once 'TipePembayaran.php';

class Cash implements TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Cash';
    }
}