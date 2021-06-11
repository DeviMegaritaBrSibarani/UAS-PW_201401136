<?php

if(isset($_POST['simpan']))
{
    include('koneksi.php');
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $peminat = $_POST['peminat'];
    $update = mysqli_query($koneksi, "update daftar set

    nama  = '$nama',
    harga = '$harga',
    peminat = '$peminat'

    where nama = '$nama'")

    or die(mysqli_error());

    if($update)
    {
        echo "<h2>data berhasil diupdate</h2>";
        echo "<script>window.location = 'index.php</script>";
}
else
{
    echo "<h2>gagal menyimpan data</h2>";
    echo "<a href ='edit.php ?nama = ".$nama."'>kembali</a>";
}
}
else 
{
    echo "<script>window.history.back()</script>";
}

?>