<?php 

	require_once 'confiq/connection.php';

	$con = new connection();

	if (!empty($_POST)) {
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$con->query("INSERT INTO menu (nama,harga) VALUES ('{$nama}',$harga)");
	}
 ?>

 <form action="" method="post">
 	<label for="">menu makanan</label><br>
 	<input type="text" name="nama"><br>
 	<label for="">harga</label><br>
 	<input type="number" name="harga"><br>
 	<button>simpan</button>
 </form>