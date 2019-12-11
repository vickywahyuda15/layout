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
				<li><a href="">Registrasi</a></li>
				</button>
				<button class="btn">
				<li><a href="../as/tentang.php">Tentang</a></li>				
				</button>
			</ul>
		</div>
		<div class="badan">			
			
			<div class="content">
<?php

    include "config.php";
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
		$agama = $_POST['agama'];
		$jenis_k = $_POST['jenis_k'];
        
        $SQL = "Update student SET nama='$nama',alamat='$alamat',pekerjaan='$pekerjaan',agama='$agama',jenis_k='$jenis_k' WHERE id=$id";
        $Query = mysqli_query($connect, $SQL);
        
        header ('location:view.php');
    ?>  
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center><p> &#169; Stikom Muhammadiyah Batam </p></center>
		</div>
	</div>
</body>
</html>