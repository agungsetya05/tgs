<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" href="logo.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 7 Semarang</title>
    <link rel="stylesheet" type="text/css" media="all" href="style2.css" media="all">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	
</head>

<body>
   <div id="layout">
     <div id="header">
      <img src="header2.jpg" height="200px" width="100%">
     </div>
   </div>
   
		<?php include('navbar.php'); ?>
	
	<div id="runningtext">
			<marquee behavior="scrooll" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
				SELAMAT DATANG DI WEBSITE SMKN 7 SEMARANG , Website ini dikembangkan oleh Agung Setya
			</marquee>
	</div>	
	
	<div id="isi">
	
	<div class="isipostingall"><br>
			<h1>VISI & MISI</h1><br>
			<hr>
			<p align="center">
			<img src="stemba.jpg" width="40%" height="250px"><br></p>
			<p align="justify"><h1>Visi</h1><br>
			1.	Menjadi Sekolah Menengah Kejuruan (SMK) unggul dalam kompetensi, karakter, berwawasan lingkungan di era global.<br>
			<h1>Misi</h1><br>
			1.	Mengembangkan sistem pendidikan berkarakter, berwawasan lingkungan, dan berbudaya Indonesia.<br>
			2.	Menyelenggarakan sistem pendidikan yang terintegrasi dengan dunia industri dan dunia usaha.<br>
			3.	Menyelenggarakan model pembelajaran berbasis Teaching Factory (TeFa).<br>
			4.	Menyelenggarakan layanan prima pendidikan kepada masyarakat dan pemangku kepentingan / stakeholder.<br>
			5.	Menyelenggarakan pendidikan dan pelatihan untuk menghasilkan lulusan yang menguasai iptek berlandaskan iman dan takwa.<br>
			6.	Mengembangkan Sistem Manajemen Mutu Pendidikan berbasis teknologi informasi.<br>
			7.	Menyelenggarakan pendidikan dan pelatihan, uji kompetensi, dan sertifikasi sesuai dengan Standar Kualifikasi Kerja Nasional<br>
				Indonesia dan Internasional.<br>
			<br></p>
	</div>
	</div>
	
	<div id="sidebar">
	<!-- DOM -->
	<h1 class="judulwidget">Kalkulator</h1>
	<center><h1>KALKULATOR DOM</h1>
    <form action="" name="formku">
        <input type="text" placeholder="Masukkan Angka 1" name="angka1">
        <input type="text" placeholder="Masukkan Angka 2" onchange="jml()" name="angka2">
        <input type="text" placeholder="PENJUMLAHAN" name="penjumlahan">
        <input type="text" placeholder="PENGURANGAN" name="pengurangan">
        <input type="text" placeholder="PERKALIAN" name="perkalian">
        <input type="text" placeholder="PEMBAGIAN" name="pembagian">

    </form></center>
    <script>
        function jml(){
         var ang1=document.formku.angka1.value;
         var ang2=document.formku.angka2.value;

         ang1=parseInt(ang1);
         ang2=parseInt(ang2);

         document.formku.penjumlahan.value=ang1+ang2;
         document.formku.pengurangan.value=ang1-ang2;
         document.formku.perkalian.value=ang1*ang2;
         document.formku.pembagian.value=ang1/ang2;
        }   
    </script><br><br>
		
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
	<script>
	/* JSON Static*/
	var JsonDta=[
		{
			nama: "Agung Setya Dinindra",
			nim: "A11.2017.10664",
		},
		{
			nama: "Argodedali",
			nim: "A11.2017.10650",
		},
		{
			nama: "Timur Elang",
			kelas: "A11.2017.10654",
		},
	];

	var i;
	for(i=0;i<3;i++){
		console.log(JsonDta[i].nama);
		console.log(JsonDta[i].nim);
	}



	$(document).ready(function () {
		$('.linkpindah').click(function (e) { 
			e.preventDefault();
			$.get($(this).attr('href'),function (data, textStatus, jqXHR) {
				$('.isipostingall').html(data);
				console.log(data);
			}	
			);
		});
	});
	</script>
</body>
</head>