<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body background="../img/website.png">
	<div class="wrap">
		<div class="header">
		<img src="../img/stikom.jpg" height="115" align="right">
				<h1 style="color:#ba1212"> STIKOM MUHAMMADIYAH BATAM </h1>
				<h5>Jln Prof DR Hamka No 3, Tembesi, Batu Aji, Kota Batam., kabupaten Kota Batam – Prop. Kepulauan Riau – Indonesia</h5> 
		</div>
		<div class="menu">
			<ul>
				<button class="btn">
				<li><a href="../home.php">Home</a></li>
				</button>
				<button class="btn">
				<li><a href="../profil.php">Profil</a></li>
				</button>
				<button class="btn">
				<li><a href="add.php">Registrasi</a></li>
				</button>
				<button class="btn">
				<li><a href="../as/tentang.php">Tentang</a></li>				
				</button>
			</ul>
		</div>
		<div class="badan">			
			
			<div class="content">
			<?php
  	if(isset($_POST['Submit'])) {
	    include "config.php";
	    $nama = $_POST['nama'];
	    $alamat = $_POST['alamat'];
	    $pekerjaan = $_POST['pekerjaan'];
		$agama = $_POST['agama'];
		$jenis_k = $_POST['jenis_k'];
		
	    
	    $SQL = "INSERT INTO student (nama, alamat, pekerjaan,agama,jenis_k) VALUES ('$nama', '$alamat', '$pekerjaan','$agama','$jenis_k')";
	    $Query = mysqli_query($connect, $SQL);
	    
	    if ($Query) {
	        //JIKA SUKSES TAMBAH
	        header ('location:view.php?pesan=add_true&nama=' . $nama);
	    } else {
	        //JIKA GAGAL TAMBAH
	        header('location:add.php?pesan=add_false');
	    }
	} else {
	    header('location:add.php?pesan=no_input');
	}	
	?>
			
	
		</form>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center><p> &#169; Stikom Muhammadiyah Batam </p></center>
		</div>
	</div>
</body>
</html>