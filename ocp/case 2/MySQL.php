<?php

require_once 'DBMS.php';

class mysql implements DBMS {
    public function createConnection()
    {
        echo 'koneksi MySQL';
    }
}