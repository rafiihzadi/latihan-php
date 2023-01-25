<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="input.php">+ TAMBAH MAHASISWA</a>
	<br/>
		<?php 
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
				echo "Data berhasil di input.";
			}else if($pesan == "update"){
				echo "Data berhasil di update.";
			}else if($pesan == "hapus"){
				echo "Data berhasil di hapus.";
			}
		}
		?>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
			include "koneksi.php";
			$no = 1;
			$query_mysql = mysqli_query($host, "SELECT * FROM user");
			while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">EDIT |</a>
				<a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>