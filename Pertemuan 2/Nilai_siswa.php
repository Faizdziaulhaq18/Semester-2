<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
  
<form action="Nilai_siswa.php" method="post">
    Nilai :<input type="number" name="nilai" id="nilai">
    <input type="submit" value="Submit">
</form>

<?php

// Buat Variabel 
$nilai = $_POST["nilai"];

// If Else


// if ($nilai >= 85 && $nilai <= 100) {
//     echo "Nilai : A";
// } elseif ($nilai >= 70 && $nilai <= 84) {
//     echo "Nilai : B";
// } elseif ($nilai >= 56 && $nilai <= 69) {
//     echo "Nilai : C";
// }elseif ($nilai >= 36 && $nilai <= 55) {
//     echo "Nilai : D";
// }elseif ($nilai >= 0 && $nilai <= 35) {
//     echo "Nilai : E";
// }else {
//     echo "Nilai : I";
// }

// Buat Switch
switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo "Sangat Memuaskan";
        break;
    case $nilai >= 70 && $nilai <= 84:
        echo "Memuaskan";
        break;
    case $nilai >= 56 && $nilai <= 69:
        echo "Cukup";
        break;
    case $nilai >= 36 && $nilai <= 55:
        echo "Kurang";
        break;
    case $nilai >= 0 && $nilai <= 35:
        echo "Sangat Kurang";
        break;                    
    default:
        echo"Tidak Ada";
        break;
}
?>

</body>
</html>