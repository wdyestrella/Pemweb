<?php
$nama = $_POST['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$hijab = $_POST['hijab'];
$tmp = $_FILES['upload']['temp'];
$nama = $_FILES['upload']['name'];
rename($tmp, $nama);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Lomba Lukis Hijab</title>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body>
	<form class="modal-content" id="tugas">
	<div class="header">
		LOMBA LUKIS HIJAB
	</div>
	<div class="spasi" style="margin-top: 0px"></div>
	<div class="content">
	<h3 align="center">Halo! Anda telah mengisi formulir pendaftaran Lomba Lukis Hijab. <br> Di bawah ini adalah data diri Anda</h3>
	<div><img class="pas-foto" src="<?php echo $nama; ?>" alt="Pas Foto" ></div>
		
				<div>
				Nama Lengkap :
				<?php
				echo $_POST['nama_lengkap'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Tanggal Lahir : 
				<?php
				echo $_POST['tanggal'] . $_POST['bulan'] . $_POST['tahun'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Jenis Kelamin : 
				<?php
				echo $_POST['jenis_kelamin'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Alamat Lengkap : 
				<?php
				echo $_POST['alamat'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Email : 
				<?php
				echo $_POST['email'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Lomba Lukis Hijab : 
				<?php
				echo $_POST['hijab'];
				echo "<br/>";
				?>
			</div>
			
			<div>
			Ruang Lomba :
				<?php
				echo $ruang; ?>
			</div>
			<div class="SPASI"></div>
			<div class="SPASI"></div>
			<div class="SPASI"></div>
			
			
		<h3 align="center">Anda telah terdaftar sebagai peserta. <br>Terima kasih atas partisipasi Anda dalam Lomba Lukis Hijab.</h3>
	</div>
	</form>
</body>
</html>