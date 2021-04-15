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
        define('JUDUL', 'Hitung Luas Lingkaran');
        define("PHI", 3.14);

        echo JUDUL;

        $r=10;
        echo "<br/> Jari-jari : $r<br/>";

        $luas=PHI * $r *$r;
        echo "Luas lingkaran = $luas";
    ?>

    

</body>
</html>


