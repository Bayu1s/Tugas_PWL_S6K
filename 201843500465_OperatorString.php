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
    $text1 = "Saya sedang bermain bola";
    $text2 = "Di lapangan kebayoran";
    $text3 = "dengan temanku";

    $hasil = $text1 . $text2 . $text3;
    printf("hasil : %s<br/>",$hasil);

    $hasil = $text1 . " " . $text2 . " " . $text3;
    echo "hasil :" . $hasil;
?>
    
</body>
</html>
