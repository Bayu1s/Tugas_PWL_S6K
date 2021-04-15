<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Anda</title>
</head>
<body>
<h1><b>BIODATA</b></h1>
<?php 
 
    echo "Nama       : " . $_POST["nama"]."<br/>";
    echo "Umur       : " . $_POST["Umur"]."<br/>";
    echo "Gender     : " . $_POST["Gender"]."<br/>";
    
    if (isset($_POST["ok"])){
      echo "Hobi     : " . $_POST["Hobi"];
      if(isset($_POST["ok"])){
      echo " dan " . $_POST["Hobi1"] ."</br>";
      }
    }
    echo "Pendidikan : " . $_POST["Pendidikan"]."<br/>";
    echo "Alamat     : " . $_POST["alamat"];
  
?>
<br/> <br/>
<a href="index.php">Kembali menu utama </a>

  
</body>
</html>