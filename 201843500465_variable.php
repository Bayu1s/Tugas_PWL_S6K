<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="index.php">Kembali ke menu utama</a>
<br/> <br/>

<?php 
    $nama = "Bayu";
    $usia = 5;
    $hobi = array ("membaca", "mewarnai");

    echo "$nama berusia $usia tahun <br/>";

    echo "hobinya : $hobi[0], $hobi[1]";
?>
    
</body>
</html>
