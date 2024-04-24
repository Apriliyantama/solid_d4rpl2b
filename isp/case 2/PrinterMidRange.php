<?php

include_once "FiturCetak.php";
include_once "FiturScan.php";

class PrinterMidRange implements FiturCetak, FiturScan {
    public function cetakKertas(): void
    {
        echo "PrinterMidRange mencetak kertas\n";
    }
    public function scanKertas(): void
    {
        echo "PrinterMidRange scan kertas\n";
    }
}