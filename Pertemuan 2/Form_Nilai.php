<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1>Form Nilai Siswa</h1>
<hr size="12">
<form action="Form_Nilai.php" method="GET">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar Dasar Pemrograman</option>
        <option value="BD1">Basis Data 1</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="Nilai_Uts" name="Nilai_Uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="Nilai_Uas" name="Nilai_Uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Tugas" class="col-4 col-form-label">Nilai Tugas / Praktkum</label> 
    <div class="col-8">
      <input id="Nilai_Tugas" name="Nilai_Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="Proses"/>
    </div>
  </div>
</form>
<!-- Kode PHP -->
<?php

// Menangkap Data User
$Proses = $_GET["Proses"];
$Nama = $_GET["Nama"];
$MatKul = $_GET["Matkul"];
$Nilai_Uts = $_GET["Nilai_Uts"];
$Nilai_Uas = $_GET["Nilai_Uas"];
$Nilai_Tugas = $_GET["Nilai_Tugas"];

echo 'Proses : '.$Proses;
echo '<br/>Nama :'.$Nama;
echo '<br/>Mata Kuliah:'.$MatKul;
echo '<br/>Nilai UTS :'.$Nilai_Uts;
echo '<br/>Nilai UAS :'.$Nilai_Uas;
echo '<br/>Nilai Tugas :'.$Nilai_Tugas;
?>
</body>
</html>