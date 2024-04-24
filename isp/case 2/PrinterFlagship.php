<?php

include_once "FiturCetak.php";
include_once "FiturFax.php";
include_once "FiturScan.php";

class PrinterFlagship implements FiturCetak, FiturFax, FiturScan {
    public function cetakKertas(): void
    {
        echo "PrinterFlagship mencetak kertas\n";
    }
    public function terimaFax(): void
    {
        echo "PrinterFlagship terima fax\n";
    }
    public function scanKertas(): void
    {
        echo "PrinterFlagship scan kertas\n";
    }
}