<?php

class DBMSconnection{
    public function connect(DBMS $dbms): void {
        $dbms->createConnection();
    }
}