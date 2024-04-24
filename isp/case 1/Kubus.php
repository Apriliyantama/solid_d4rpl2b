<?php

include_once "Shape2Dimension.php";
include_once "Shape3Dimension.php";

class Kubus implements Shape2Dimension, Shape3Dimension{
    public function calculateArea(): void
    {
        echo "Kubus 2D\n";
    }
    public function calculateVolume(): void
    {
        echo "Kubus 3D\n";
    }
}