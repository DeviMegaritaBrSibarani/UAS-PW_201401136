<html lang="en">
  <head>
      <title> tambah </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>  
    <h3>
       <a href="index.php"><h5>Kembali</h5></a></br> 
       <p> Daftar menu</p>
    </h3>
    <form action="tambah_proses.php" method="post">
            <table>
                <tr>
                   <td>Nama </td>
                   <td>:</td>
                   <td>
                        <input type="text" name="nama" required>
                   </td> 
                </tr>
                <tr>
                <td>Harga </td>
                <td>:</td>
                <td>
                        <input type="text" name="harga" required>
                </td>
                </tr>
                <tr>
                <td>Peminat</td>
                <td>:</td>
                <td>
                        <input type="text" name="peminat" required>
                </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="tambah" value="tambah"> </td>
                </tr>
            </table>
        </form>
</body>
</html>