<?php 
  $nilai = $_POST["nilai"];
  $nilaihuruf = $_POST["nilai"];
  $submit = $_POST["submit"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konversi Nilai</title>
</head>
<body>
<?php
  


  if (($submit < 0) || ($nilai > 100)) {
    echo "Nilai angka yang diberikan salah";
  } else {
    if (($nilai >= 85) && ($nilai <= 100)) {
      $nilaihuruf = "A";
    } else if (($nilai >= 70) && ($nilai <= 84)) {
      $nilaihuruf = "B";
    } else if (($nilai >= 60) && ($nilai < 70)) {
      $nilaihuruf = "C";
    } else if (($nilai >= 50) && ($nilai < 60)) {
      $nilaihuruf = "D";
    } else if ($nilai < 50)  {
      $nilaihuruf = "E";
    }
    echo "<br>";
    echo "----BIODATA NILAI SISWA-----<br>";
    echo "Nilai Angka   : $nilai   <br>";
    echo "Nilai Huruf   : $nilaihuruf <br>";
    echo "-----------------------<br>";
  }
  ?>

<a href="index.php">Kembali menu utama </a>
</body>
</html>