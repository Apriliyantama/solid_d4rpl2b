<?php

require_once 'DBMS.php';

class mongodb extends DBMS {
    public function createConnection()
    {
        echo 'koneksi MongoDB';
    }
}