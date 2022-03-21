<?php

//  Cara Buat Class
class Mahasiswa{
    //   Cara Membuat Properti (Variabel)
    public $nama;
    public $alamat;
    public $jurusan;

    // Cara Membuat Method (Fungsi)
    function CekNama(){
        echo "Nama Saya Adalah : " . $this->nama;
        
    }

    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}

// Cara Membuat Object
$mahasiswa1 = new Mahasiswa("Faiz","Jakarta","Informatika");
$mahasiswa2 = new Mahasiswa("Dziaulhaq","Bekasi","Listrik");

// Cara Akses Properti
echo $mahasiswa1->nama;
echo "<br>";

// Akses data Mahasiswa 2
echo $mahasiswa2->nama;
echo "<br>";


// Cara Akses Method
// $mahasiswa1-> CekNama();

?>