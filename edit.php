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
    include 'config.php';
    $id = $_GET['id'];

    $SQL = "SELECT * FROM student Where id='$id'";
    $Query = mysqli_query($connect, $SQL);
    while($hasil = mysqli_fetch_array($Query)) {
        
?>
 <form action="update.php" method="post" name="form1">
        <input type="hidden" name="id" value="<?php echo $hasil ['id'];?>">
        
         <table>
           <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $hasil ['nama'];?>"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $hasil ['alamat'];?>"></td>
            </tr>
            <tr> 
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $hasil ['pekerjaan'];?>"></td>
            </tr>
			<br>
			<tr> 
                <td>jenis kelamin</td>
                <td><input type="radio" name="jenis_k" value="laki-laki"> Laki-Laki</td>
				<td><input type="radio" name="jenis_k" value="perempuan"> Perempuan</td>
            </tr>
			</table>
			<br>
			<tr>
				<font width="100" color="black"> Agama </font>
				<select name="agama">
				<option value="islam">Islam</option>
				<option value="kristen">Kristen</option>
				<option value="hindu">Hindu</option>
				<option value="budha">Budha</option>
				<option value="khatolik">Khatolik</option>
				</select>
			</tr>
			<tr>
				<p width="100"> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
    </form>
    <?php } 
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