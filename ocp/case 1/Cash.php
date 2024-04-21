<?php

require_once 'TipePembayaran.php';

class Cash extends TipePembayaran {
    public function memprosesPembayaran() {
        echo 'Proses Pembayaran menggunakan Cash';
    }
}