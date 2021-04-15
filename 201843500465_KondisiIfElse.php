<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kondisi if</title>
</head>
<body>
  <a href="index.php">Kembali ke menu utama<a/>

  <?php 
    $nilai = 75;
    if ($nilai >= 70)
      echo "Anda lulus";
    else
      echo "Anda tidak lulus";
  ?>
</body>
</html>