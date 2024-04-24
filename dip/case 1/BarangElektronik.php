<?php

require_once "Saklar.php";

abstract class BarangElektronik implements Saklar {
    abstract function beroperasi(): void;
    abstract function berhenti(): void;
}