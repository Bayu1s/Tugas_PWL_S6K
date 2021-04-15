<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.php">Kembali menu utama </a>
  <br/><br/>
 
  
  <?php 
    $hari = 3;
    if ($hari == 1) echo "senin";
    elseif($hari == 2) echo "Selasa";
    elseif($hari == 3) echo "Rabu";
    elseif($hari == 4) echo "Kamis";
    elseif($hari == 5) echo "Jumat";
    elseif($hari == 6) echo "Sabtu";
    elseif($hari == 7) echo "Minggu";
  ?>
</body>
