<?php

class PembayaranCustomer {
    public function menerimaPembayaran(TipePembayaran $tipe): void {
        $tipe->memprosesPembayaran();
    }
}