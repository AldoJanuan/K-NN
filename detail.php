<?php
$id_barang=$_GET['barang'];
include "koneksi.php";
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Devstore</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="text-bg-info p-3">
    <h5 class="text-white h4"><a class="nav-link active" aria-current="page" href="index.php">Beranda</a></h5>

  </div>
</div>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<?php
$data = mysqli_query($koneksi,"select * from tb_barang where id_barang='$id_barang'");

    while($hasil = mysqli_fetch_array($data)){ ?>

<div class="card mb-3" style="max-width: 5000px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/<?=$hasil['foto_barang'];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$hasil['nama_barang'];?></a></h5>
        <p class="card-text"><?=$hasil['deskripsi_barang'];?></p>
        <p class="card-text"><small class="text-muted">Kategori : <?=$hasil['kategori'];?></small></p>
        <p class="card-text"><small class="text-muted">Harga : Rp<?=$hasil['harga_barang'];?></small></p>
        <h5 class="card-title"> <a class="btn btn-primary" href="index.php" role="button">Beli</a></h5>
      </div>
    </div>
  </div>
</div>

	<?php
	}
?>

<footer style="background-color: #0066CC;">
<p align="center">Copyright @2022</p>
  <p align="center">Creator of Aldo Januansyah H, Powered by
    <a href="https://getbootstrap.com">Bootstrap</a>
  </p>
</footer>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
