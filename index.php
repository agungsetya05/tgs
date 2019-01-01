<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="logo.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 7 Semarang</title>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" media="all">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	
	<!--KALENDER-->
	<style type="text/css">
		.main {
		width:200px;
		border:1px solid black;
		}
		.month {
		background:black;
		font:bold 12px verdana;
		color:white;
		}
		.daysofweek {
		background-color:gray;
		font:bold 12px verdana;
		color:white;
		}
		.days {
		font-size: 12px;
		font-family:verdana;
		color:black;
		background-color: lightyellow;
		padding: 2px;
		}
		.days #today{
		font-weight: bold;
		color: red;
		}
	</style>
	<script type="text/javascript" src="http://subhishine.freehostia.com/shine/files/basiccalendar.js">
	</script>
	
</head>

<body>
   <div id="layout">
     <div id="header">
      <img src="header2.jpg" height="200px" width="100%">
     </div>
   </div>

	<!-- NAVBAR -->
	<nav class='navmenu' align="left">
	  <ul>
	  <li><a href="../agung">Home</a></li>
	  <li class='submenu'><a href="#">Profil</a>
		<ul class='dropdown'>
			<li><a href="visi.php">Visi Misi</a></li>
			<li><a class="linkpindah" href="sejarah-home.php">Sejarah Singkat</a></li>
		</ul>
	  </li>
	  <li class='submenu'><a href="#">Fitur</a>
		<ul class='dropdown'>
			<li><a class="linkpindah" href="linkweb-home.php">Link Terkait</a></li>
			<li><a class="linkpindah" href="game-home.php">Mini Game</a></li>
		</ul>
	  </li>
	  <li><a class="linkpindah" href="bukutamu-home.php">Buku Tamu</a></li>
	  </ul>
	</nav>
	
	<div id="runningtext">
			<marquee behavior="scrooll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
				SELAMAT DATANG DI WEBSITE SMKN 7 SEMARANG , Website ini dikembangkan oleh Agung Setya
			</marquee>
	</div>	
	
	<div id="sidebar">
		<h1 class="judulwidget">Kalender</h1>
		<center>
		<script type="text/javascript">
		var todaydate=new Date()
		var curmonth=todaydate.getMonth()+1 //get current month (1-12)
		var curyear=todaydate.getFullYear() //get current year

		document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
		</script>
		</center><br>
			
		<h1 class="judulwidget">Banner</h1>
		<div class="widget">
			<img src="lawang_sewu.gif" class="gambariklan">
		</div>
		
		<h1 class="judulwidget">Kontak Kami</h1>
		<table border="0" cellpadding="5" align="center">
		<tr>
			<td><center><img src="logo.jpg" height="100px" width="100px"></center></td>
		</tr>
		<tr>
			<td><b><center>SMK NEGERI 7 SEMARANG</center></b></td>
		</tr>
		<tr>
			<td><font size="2"><center>12NPSN : 20337604</center></font></td>
		</tr>
		<tr>
			<td><font size="2"><center>Jl. Simpang Lima, Mugassari,</center></font></td>
		</tr>
		<tr>
			<td><font size="2"><center>Semarang Selatan, Kota Semarang,</center></font></td>
		</tr>
		<tr>
			<td><font size="2"><center>Jawa Tengah</center></font></td>
		</tr>
		</table>
		
		<hr>
		<p align="center">info@smkn7semarang.sch.id<br>
		TLPN : 0248311532</p></center><br>
	</div>
	<div id="isi">
		<h1 class="judul">Berita Terkini</h1>
			<div class="cycle-slideshow">
				<span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
				<span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
				<img src="images/4.jpg" height="300px" width="100%" align="center" title="Penyerahan Plakat Kerjasama dengan PLN">
				<img src="images/3.jpg" height="300px" width="100%" align="center" title="Sertifikasi siswa yang lolos seleksi kerja">
				<img src="images/2.jpg" height="300px" width="100%" align="center" title="Penyerahan hadiah lomba kepada siswa">
				<img src="images/1.jpg" height="300px" width="100%" align="center" title="Peresmian Tecknopark Building">
			</div><br>
		<h1 class="judul">Artikel terbaru</h1>
		<div class="isiposting">
		
					<img src="posting/posting1.jpg" width="200px" height="200px" class="gambardepan">
		
				
					<h2>Pendidikan Sebagai Investasi<br>Jangka Panjang</h2>
			
					<p align="justify">	Profesor Toshiko Kinosita mengemukakan bahwa sumber daya manusia Indonesia masih sangat lemah untuk mendukung
					perkembangan industri dan ekonomi. Penyebabnya karena pemerintah selama ini tidak pernah menempatkan pendidikan
					sebagai prioritas terpenting. Tidak ditempatkannya pendidikan sebagai prioritas terpenting karena masyarakat Indonesia,
					mulai dari yang awam hingga politisi dan pejabat pemerintah, hanya berorientasi mengejar uang untuk memperkaya diri sendiri 
					dan tidak pernah berfikir panjang.
					<a href="posting1.php">
					Baca selengkapnya >>>>>
					</a></p>
			
		</div>
			
		<div class="isiposting">
				<img src="posting/posting2.jpg" width="200px" height="200px" class="gambardepan"><br>
				<h2>Apa itu Pemanasan Global?</h2><br>
		
				<p align="justify">"Panas banget ya hari ini!” Seringkah Anda mendengar pernyataan tersebut terlontar dari orang-orang di sekitar 
				Anda ataupun dari diri Anda sendiri? Anda tidak salah, data-data yang ada memang menunjukkan planet bumi terus mengalami peningkatan 
				suhu yang mengkhawatirkan dari tahun ke tahun. Selain makin panasnya cuaca di sekitar kita, Anda tentu juga menyadari makin banyaknya 
				bencana alam dan fenomena-fenomena alam yang cenderung semakin tidak terkendali belakangan ini. Mulai dari banjir, puting beliung, 
				semburan gas, hingga curah hujan yang tidak menentu dari tahun ke tahun.
				<a href="posting2.php">
				Baca selengkapnya >>>>>
				</a></p>
		</div>
	
	</div>
	<footer>
		<div id="footer">
			Copyright &copy; 2K18
			Designed by Agung Setya
			<a href="#" class="ToTop"></a>
		</div>
	</footer>
</body>
</html>