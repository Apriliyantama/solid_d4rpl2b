<?php

require_once 'DBMS.php';

class mongodb implements DBMS {
    public function createConnection()
    {
        echo 'koneksi MongoDB';
    }
}