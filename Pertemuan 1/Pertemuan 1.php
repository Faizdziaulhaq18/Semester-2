<?php
    // Variable Umur
    $nama = 'Faiz';
    $umur = '18';
    $berat = '78';

    echo "<h1 style='color: red'>Nama Saya $nama, Umur Saya $umur, Berat Saya $berat</h1>";

    // Variable Sistem
    echo 'Dokumen Root'.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variable Konstan
    define ('makanan', 'sushi');
    echo makanan;


?>