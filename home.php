<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
		<link rel="stylesheet" type="text/css" href="slide.css">
			<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="img/website.png">
	<div class="wrap">
		<div class="header">
		<img src="img/stikom.jpg" height="115" align="right">
				<h1 style="color:#ba1212"> STIKOM MUHAMMADIYAH BATAM </h1>
				<h5>Jln Prof DR Hamka No 3, Tembesi, Batu Aji, Kota Batam., kabupaten Kota Batam – Prop. Kepulauan Riau – Indonesia</h5> 
		</div>
		<div class="menu ">
			<ul>
				<button class="btn">
				<li><a href="home.php">Home</a></li>
				</button>
				<button class="btn">
				<li><a href="profil.php">Profil</a></li>
				</button>
				<button class="btn">
				<li><a href="reg/add.php">Registrasi</a></li>
				</button>
				<button class="btn">
				<li><a href="as/tentang.php">Tentang</a></li>				
				</button>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
			</div>
			<div class="content">
				<h1>PROFIL STIKOM Muhammadiyah Batam</h1>
			<p><span style="margin-left:2em"> Sekolah Tinggi Ilmu Komputer Muhammadiyah Batam adalah salah satu PT swasta di Negri Tercinta ini yang berwujud Sekolah Tinggi, dinaungi oleh dikti dan termaktub kedalam kopertis wilayah 10. PT ini telah bangkit mulai tahun 17 April 2013 dengan Nomor SK PT 120/E/O/2013 dan Tanggal SK PT 17 April 2013 , Sekolah Tinggi ini beralamat di Komp Muhammadiyah, 
			Jln Prof DR Hamka No 3, Tembesi, Batu Aji, Kota Batam., kabupaten Kota Batam – Prop. Kepulauan Riau – Indonesia.</p>
			<br>
			</br>
			
			<center>
				<h2>Pengenalan Teknik Informatika<br/> </h2>
			</center>
		<div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="img/it.jpg" alt="Gambar 1" width="250">
			<img src="img/tt.jpg" alt="Gambar 2" width="250">
			<img src="img/home3.jpg" alt="Gambar 3" width="250">
			<img src="img/home4.jpg" alt="Gambar 2" width="250">
			<img src="img/home5.png" alt="Gambar 3" width="250">
		</div>
		</div>	
		<br>
		<center>
		<i>
		"Kesukuksesan mahasiswa harus dimulai dari
		adanya perubahan. Dan perubahan utama
		adalah perubahan yang dimulai dari pola pikir."
		</i>
		<br>
		</br>
		<i>
		"Mahasiswa yang sukses tidak selalu
		mahasiswa yang pintar. Akan tetapi mahasiswa
		yang sukses adalah mereka yang selalu gigih
		dan pantang menyerah"
		</i>
		<br>
		</br>
		<i>
		"hiduplah seolah engkau mati besok. Belajarlah seolah engkau hidup selamanya"-Mahatma Gandi
		</i>
		<br>
		</br>
		<i>
		"Agama tanpa ilmu adalah buta. Ilmu tanpa agama adalah lumpuh"- Albert Einstein
		</i>
		</center>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			<center><p> &#169; Stikom Muhammadiyah Batam </p></center>
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <div id="map" style="width: 1200px; height: 350px;"></div>
        <script type="text/javascript">
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.176587,106.827115);
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 13,
                  center: myLatlng
              };
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Monas"
              });
        </script>
		</div>
	</div>
</body>
</html>