<?php

require_once 'DBMS.php';

class mysql extends DBMS {
    public function createConnection()
    {
        echo 'koneksi MySQL';
    }
}