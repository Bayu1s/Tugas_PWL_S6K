<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran</title>
</head>

<body>
  <form action="201843500465_FormBiodataHasil.php" method="POST">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="text" name="Umur" /></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td><input type="radio" name="Gender" value="Laki-laki">Laki-laki</td>
        <td><input type="radio" name="Gender" value="Perempuan">Perempuan</td>
      </tr>
      <tr>
        <td>Hobi</td>
        <td>:</td>
        <td><input type="checkbox" name="Hobi" value="Traveling">Traveling</td>
        <td><input type="checkbox" name="Hobi1" value="Shopping">Shopping</td>
      </tr>
      <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td>
          <select name="Pendidikan">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA/SMK">SMA/SMK</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" rows="5" cols="20"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="ok" value="OK"></td>
        
      </tr>
      
    </table>

  </form>

</body>

</html>