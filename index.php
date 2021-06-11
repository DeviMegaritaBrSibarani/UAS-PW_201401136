<?php
  session_start();
  include "koneksi.php";
  if (!isset($_SESSION['username'])){
    header ("location:login.php");
  }

  if (isset($_SESSION ['username'])){
    $username= $_SESSION['username'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http.equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device.width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="Stylesheet" href="style.css">

</head>
<body>

  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Toko Matahari</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#location">Location</a>
                <a class="dropdown-item" href="#">Normal Price</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Discount</a>
                <a class="dropdown-item" href="aksi_logout.php">logout</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">My Store</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Carousel (1).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Carousel (2).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Carousel (3).jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
      <div class="card-deck mt-5 mb-5 ">
        <div class="card">
          <img src="Gambar (1).jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="Card-text">Sepatu</h5>
            <p class="card-text">Tampil lebih stylish dengan model sepatu wanita terbaru! Aneka pilihan model sepatu wanita hadir di Matahari.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="Gambar (2).jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="Card-text">Tas</h5>
            <p class="card-text">Berpergian pasti butuh tas traveling yang bagus. Cari toko yang jual tas?.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="Gambar (3).jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="Card-text">Baju</h5>
            <p class="card-text">Belanja produk pakaian wanita online terbaru di Matahari sekarang. Nikmati berbagai promo dan voucher diskon menarik setiap harinya!.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
      
    <div class="container">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class=iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63711.83488090472!2d98.62429831200171!3d3.5898415312116545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e2e9000003b%3A0xe22ff2c635f33b4e!2sMatahari%20Plaza%20Medan%20Fair!5e0!3m2!1sid!2sid!4v1621700213656!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <thead>
    <br>
    <div class="container">
      <table class="table table-striped table-dark">
          <h3 class="display-4">Daftar Menu</h3>
          <a href="tambah.php"><h4>Tambah Menu</h4></a>
  
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Peminat</th>
     </thead>

 <!--           menampilkan data mahasiswa        -->   

<?php
  include_once 'koneksi.php';
  $no=1;
  $data=mysqli_query($koneksi, "select * from daftar");
  while ($d=mysqli_fetch_array($data)){
?>

  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama']; ?></td>
    <td><?php echo $d['harga']; ?></td>
    <td><?php echo $d['peminat']; ?></td>
    <td>
      <a href="edit.php ?nama=<?php echo $d['nama'];?>">edit</a>
      <a href="hapus.php ?nama=<?php echo $d['nama'];?>">hapus</a>
    </td>
   </tr> 
<?php
  }
?>

 <!--           menampilkan data mahasiswa        -->   
 </table>
 </div>

    <div id="container">
			<div id="calculator">
				<div id="result">
					<div id="history">
						<p id="history-value"></p>
					</div>
					<div id="output">
						<p id="output-value"></p>
					</div>
				</div>
				<div id="keyboard">
					<button class="operator" id="clear">C</button>
					<button class="operator" id="backspace">CE</button>
					<button class="operator" id="%">%</button>
					<button class="operator" id="/">&#247;</button>
					<button class="number" id="7">7</button>
					<button class="number" id="8">8</button>
					<button class="number" id="9">9</button>
					<button class="operator" id="*">&times;</button>
					<button class="number" id="4">4</button>
					<button class="number" id="5">5</button>
					<button class="number" id="6">6</button>
					<button class="operator" id="-">-</button>
					<button class="number" id="1">1</button>
					<button class="number" id="2">2</button>
					<button class="number" id="3">3</button>
					<button class="operator" id="+">+</button>
					<button class="empty" id="empty"></button>
					<button class="number" id="0">0</button>
					<button class="empty" id="empty"></button>
					<button class="operator" id="=">=</button>
				</div>
			</div>
		</div>

    <footer id="location" class="text-center mt-3 mb-3">
      <img src="logo.png" alt="logo">
      <p>My Store</p>
    </footer>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>