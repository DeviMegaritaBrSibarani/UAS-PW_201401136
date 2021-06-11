<?php

    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $nama       =$_POST['nama'];
        $gender     =$_POST['harga'];
        $alamat     =$_POST['peminat'];

        $input= mysqli_query($koneksi, "insert into menu values
        ('$nama', '$gender', '$alamat')");

        if($input)
        {
            echo "<h3>Data berhasil ditambahkan</h3>";
            echo "<script>window.location='tambah.php'</script>";
        }
        else
        {
            echo "gagal menambahkan data";
            echo "<a href = 'index.php'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</scrpit>";
    }
?>