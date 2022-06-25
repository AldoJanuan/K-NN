<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container col-md-6 mt-4">
		<h1>TABEL BARANG</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				 DATA BARANG<a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>nama barang</th>
							<th>harga barang</th>
							<th>deskripsi barang</th>
							<th>foto barang</th>
							<th>kategori barang</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from tb_barang") or die(mysqli_error($koneksi));
							//script untuk menampilkan data barang

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['nama_barang']; ?></td>
						<td><?= $row['harga_barang']; ?></td>
						<td><?= $row['deskripsi_barang']; ?></td>
						<td><img src="images/<?= $row['foto_barang']; ?>"></td>
						<td><?= $row['kategori']; ?></td>
						<td>
								<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
		<a href="index.php" class="btn btn-sm btn-primary float-right"> BACK HOME </a>
	</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>