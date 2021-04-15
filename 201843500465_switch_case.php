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
  <p> sekarang adalah bulan : </p>
  <?php 
     $bulan = 2;
    Switch ($bulan){
      case 1 : echo "januari"; 
      break;

      case 2 : echo "febuari";
      break;

      case 3 : echo "maret";
      break;

      case 4 : echo "april";
      break;

      case 5 : echo "mei";
      break;

      case 6 : echo "juni";
      break;

      case 7 : echo "juli";
      break;

      case 8 : echo "agustus";
      break;

      case 8 : echo "september";
      break;

      case 10 : echo "oktober";
      break;

      case 11 : echo "november";
      break;

      case 12 : echo "desember";
      break;
    }
  
  
  ?>
</body>
