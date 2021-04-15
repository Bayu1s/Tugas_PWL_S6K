<?php
$baris = $_POST["baris"];
$kolom = $_POST["kolom"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membuat tabel</title>
</head>

<body>
<h1><b>MEMBUAT TABEL</b></h1>
  <?php
  echo "<table border=1>";
  for ($i = 1; $i <= $baris; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $kolom; $j++) {
      echo "<td>";
      echo "baris $i" . ", " . "kolom $j";
      echo "</td>";
    }
  }
  echo "</table>";
  ?>

  <br />
  
  <a href="index.php">Kembali menu utama </a>

</body>

</html>