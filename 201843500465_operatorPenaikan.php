<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
</head>
<body>
    <a href="index.php">Kembali ke menu utama</a>
    <br/> <br/>

    <?php
    $bil1 = 110;
    $bil2 = 25;

    $hasil = $bil1 + $bil2;
    echo "$bil1 - $bil2 = $hasil<br/>";

    $hasil = $bil1 - $bil2;
    echo "$bil1 - $bil2 = $hasil<br/>";

    $hasil = $bil1 * $bil2;
    echo "$bil1 * $bil2 = $hasil<br/>";

    $hasil = $bil1 / $bil2;
    echo "$bil1 / $bil2 = $hasil<br/>";

    $hasil = $bil1 % $bil2;
    echo "$bil1 % $bil2 = $hasil<br/>";

    $hasil = $bil1++;
    echo "$bil1++ = $hasil<br/>";

    $hasil = $bil2--;
    echo "$bil2-- = $hasil<br/>";


    
    ?>

    

</body>
</html>


