<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="Stylesheet" href="style.css">
</head>
<body>

<!-- edit data mahasiswa  -->
    <?php
        include('koneksi.php');
        $nama = $_GET['nama'];
        $show = mysqli_query($koneksi, "select *from daftar where nama = '$nama'");
        if(mysqli_num_rows($show)==0)
        {
            echo '<script>window.history.back()</script>';
        }
        else{
            $d = mysqli_fetch_assoc ($show);
        }
    ?>
<!-- edit data mahasiswa  -->

        <form action="edit_proses.php" method="post">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <table>
                <tr>
                   <td>Harga Menu</td>
                   <td>:</td>
                   <td>
                        <input type="text" name="harga" size="10" value="<?php echo $d['harga'];?>" required>
                   </td> 
                </tr>
                <tr>
                <td>Peminat</td>
                <td>:</td>
                <td>
                <input type="text" name="peminat" size="5" value="<?php echo $d['peminat'];?>" required>
                </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="simpan"> </td>
                </tr>
            </table>
        </form>

  </body>
</html>