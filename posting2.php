<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="logo.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 7 Semarang</title>
    <link rel="stylesheet" type="text/css" media="all" href="style2.css" media="all">
	<script type="text/javascript" src="js/jQuery-2.1.4.min.js"></script>
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
	<?php include('navbar.php'); ?>
	
	<div id="runningtext">
			<marquee behavior="scrooll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
				SELAMAT DATANG DI WEBSITE SMKN 7 SEMARANG , Website ini dikembangkan oleh Agung Setya
			</marquee>
	</div>	
	
	
	<div id="isi">
	<h1 class="judul">Artikel terbaru</h1>
	<div class="isipostingall"><br>
			<h1>APA ITU PEMANASAN GLOBAL??<br></h1>
			<br>
			<hr>
			<p align="center">
			<img src="posting/posting2.jpg" width="40%" height="250px"><br></p>
			<p align="justify">"Panas banget ya hari ini!” Seringkah Anda mendengar pernyataan tersebut terlontar dari orang-orang di sekitar 
			Anda ataupun dari diri Anda sendiri? Anda tidak salah, data-data yang ada memang menunjukkan planet bumi terus mengalami peningkatan 
			suhu yang mengkhawatirkan dari tahun ke tahun. Selain makin panasnya cuaca di sekitar kita, Anda tentu juga menyadari makin banyaknya 
			bencana alam dan fenomena-fenomena alam yang cenderung semakin tidak terkendali belakangan ini. Mulai dari banjir, puting beliung, 
			semburan gas, hingga curah hujan yang tidak menentu dari tahun ke tahun.<br><br>
			<h3>Penyebab Pemanasan Global</h3>
			Penelitian yang telah dilakukan para ahli selama beberapa dekade terakhir ini menunjukkan bahwa ternyata makin panasnya planet bumi 
			terkait langsung dengan gas-gas rumah kaca yang dihasilkan oleh aktifitas manusia. Khusus untuk mengawasi sebab dan dampak yang 
			dihasilkan oleh pemanasan global, Perserikatan Bangsa Bangsa (PBB) membentuk sebuah kelompok peneliti yang disebut dengan International 
			Panel on Climate Change (IPCC). Setiap beberapa tahun sekali, ribuan ahli dan peneliti-peneliti terbaik dunia yang tergabung dalam IPCC
			mengadakan pertemuan untuk mendiskusikan penemuan-penemuan terbaru yang berhubungan dengan pemanasan global, dan membuat kesimpulan dari
			laporan dan penemuan- penemuan baru yang berhasil dikumpulkan, kemudian membuat persetujuan untuk solusi dari masalah tersebut . Salah 
			satu hal pertama yang mereka temukan adalah bahwa beberapa jenis gas rumah kaca bertanggung jawab langsung terhadap pemanasan yang kita 
			alami, dan manusialah kontributor terbesar dari terciptanya gas-gas rumah kaca tersebut. Kebanyakan dari gas rumah kaca ini dihasilkan 
			oleh peternakan, pembakaran bahan bakar fosil pada kendaraan bermotor, pabrik-pabrik modern, peternakan, serta pembangkit tenaga 
			listrik.</p>
	</div>
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
	
<footer>
<div id="footer">
	Copyright &copy; 2K18
	Designed by Agung Setya
<a href="#" class="ToTop">
</div>
</footer>
</body>
</head>