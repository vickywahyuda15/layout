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
    if(isset($_GET['pesan'])) {
        if($_GET['pesan'] === 'add_true') {
            echo '<p style="color:green;">Sukses Menambahkan data : ' . $_GET['nama'] . '</p>';
        }
    }
?>
    <table border="1">
        <tr> 
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
			<th>Agama</th>
            <th>Jenis Kelamin</th>
             <th>Update</th>
        </tr>
        
        <?php
include 'config.php';

$SQL = "SELECT * FROM student";
$Query = mysqli_query($connect, $SQL);
while($hasil = mysqli_fetch_array($Query)) {         
?>

        <tr>
            <td> <?php echo $hasil['nama']; ?></td>
            <td> <?php echo $hasil['alamat']; ?></td>
            <td> <?php echo $hasil['pekerjaan']; ?></td>
			<td> <?php echo $hasil['agama']; ?></td>
            <td> <?php echo $hasil['jenis_k']; ?></td>
            <td> <a href="edit.php?id=<?php echo $hasil['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $hasil['id']; ?>">Delete</a> </td>
        </tr>
        
        <?php } ?>
    </table>

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