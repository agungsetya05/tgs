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
			<h1>PENDIDIKAN SEBAGAI INVESTASI<br>
			JANGKA PANJANG</h1><br>
			<hr>
			<p align="center">
			<img src="posting/posting1.jpg" width="40%" height="250px"><br></p>
			<p align="justify">	Profesor Toshiko Kinosita mengemukakan bahwa sumber daya manusia Indonesia masih sangat lemah untuk mendukung
			perkembangan industri dan ekonomi. Penyebabnya karena pemerintah selama ini tidak pernah menempatkan pendidikan
			sebagai prioritas terpenting. Tidak ditempatkannya pendidikan sebagai prioritas terpenting karena masyarakat Indonesia,
			mulai dari yang awam hingga politisi dan pejabat pemerintah, hanya berorientasi mengejar uang untuk memperkaya diri sendiri 
			dan tidak pernah berfikir panjang.<br><br>
			Pendapat Guru Besar Universitas Waseda Jepang tersebut sangat menarik untuk dikaji mengingat saat ini pemerintah Indonesia mulai 
			melirik pendidikan sebagai investasi jangka panjang, setelah selama ini pendidikan terabaikan. Salah satu indikatornya adalah telah 
			disetujuinya oleh MPR untuk memprioritaskan anggaran pendidikan minimal 20 % dari APBN atau APBD. Langkah ini merupakan awal kesadaran 
			pentingnya pendidikan sebagai investasi jangka pangjang. Sedikitnya terdapat tiga alasan untuk memprioritaskan pendidikan sebagai 
			investasi jangka panjang.<br></p>
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