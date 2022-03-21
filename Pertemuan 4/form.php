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
<form action="form.php" method="POST">
<form>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilih MK</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="Basdat">Basis Data</option>
        <option value="Pweb">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'],$_POST['nilai'], );
    $keterangan = $ns->hitungNilai();
    $hasil1 = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "Nama : " .$ns->nim;
    echo "<br>";
    echo "MatKul : " .$ns->matkul;
    echo "<br>";
    echo "NIlai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil1;
    echo "<br>";
    echo "Grade : " . $hasil2;
}
?>

</body>
</html>