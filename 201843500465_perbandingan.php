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


    <h1>Operator perbandingan</h1>

    <?php 
      $bil1 = 100;
      $bil2 = 20;
      $text1 = "PHP";
      $text2 = "php";

      printf("%d == %d hasilnya %d<br/>",$bil1, $bil2, $bil1 == $bil2);

      printf("%d != %d hasilnya %d<br/>",$bil1, $bil2, $bil1 != $bil2);

      printf("%d >= %d hasilnya %d<br/>",$bil1, $bil2, $bil1 >= $bil2);

      printf("%s == %s hasilnya %d<br/>",$text1, $text2, $text1 == $text2);

      printf("%s != %s hasilnya %d<br/>",$text1, $text2, $text1 != $text2);
    ?>

    

</body>
</html>


