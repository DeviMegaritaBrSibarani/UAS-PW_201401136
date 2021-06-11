<html lang="en">
<head>

<title>Hapus</title>
</head>

  <?php

if(isset($_GET['nama']))
{
    include('koneksi.php');
    $nama = $_GET['nama'];
    $cek = mysqli_query($koneksi, "select nama from daftar
    where nama = '$nama'") or die(mysqli_error());

    if(mysqli_num_rows($cek)==0)
    {
      echo "<script>window.history.back()</script>";
    }
    else{
      $del = mysqli_query($koneksi, "delete from daftar where nama = '$nama'");
      if ($del){
        echo "<h3>Daftar berhasil di hapus</h3>";
        echo "<script>window.location = 'data.php';</script>";
      }
      else{
        echo "<h2>gagal menghapus data</h2>";
        echo "<a href ='data.php'>kembali </a>";
      }
    }
}
else {
  echo "<script>window.history.back()</script>";
}
?>

  <body>

  </body>
</html>