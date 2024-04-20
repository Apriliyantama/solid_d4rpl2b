<?php

require_once 'Mahasiswa.php';

class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mhs): void {
        $nim = $mhs->getNim();
        $nama = $mhs->getNama();

        echo "NIM: $nim, Nama: $nama";
     }
}