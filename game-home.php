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
			
		
        <h1>MINI GAME<br>
			ULAR KELAPARAN</h1><br>
			<hr>
			<p align="center">Selamat Mencoba :)</p>
			<center>
			<canvas id="ruang" width="300" height="250"></canvas>
			<script type="text/javascript">
            $(document).ready(function() {
 
              // deklarasi
              var ruang = $("#ruang")[0];
              var ctx = ruang.getContext("2d");
              var lebar = $("#ruang").width();
              var tinggi = $("#ruang").height();
 
              var cw = 10;
              var tekan ;
              var makanan;
              var nilai;
 
              //membuat cell aray untuk membuat ular
              var array_ular; 
 
              function init() {
                tekan = "right"; //default direction
                create_snake();
                create_makanan(); //membuat makanan untuk ular
                //nilai game
                nilai = 0;
 
                if (typeof game_loop != "undefined") clearInterval(game_loop);
                game_loop = setInterval(paint, 60);
            }
 
            init();
 
              // membuat ular
              function create_snake() {
                // menetapkan jumlah panjang awal ular
                var length = 5; //panjang ular default
                array_ular = [];
                for (var i = length - 1; i >= 0; i--) {
                  //membuat ular horizontal mulai dari arah kiri
                  array_ular.push({ x: i, y: 0 });
              }
            }
 
              //membuat makanan untuk ular
              function create_makanan() {
                makanan = {
                  x: Math.round(Math.random() * (lebar - cw) / cw),
                  y: Math.round(Math.random() * (tinggi - cw) / cw)
              };
            }
 
              //pengaturan
              function paint() {
                // warna background
                ctx.fillStyle = "#ecf0f1";
                ctx.fillRect(0, 0, lebar, tinggi);    
                ctx.strokeStyle = "#2c3e50";
                ctx.strokeRect(0, 0, lebar, tinggi);
 
                //membuat pergerakan untuk ular
                var nx = array_ular[0].x;
                var ny = array_ular[0].y;
                if (tekan == "right") nx++;
                else if (tekan == "left") nx--;
                else if (tekan == "up") ny--;
                else if (tekan == "down") ny++;
 
                //memeriksa tabrakan
                if (
                  nx == -1 ||
                  nx == lebar / cw ||
                  ny == -1 ||
                  ny == tinggi / cw ||
                  cek_tabrakan(nx, ny, array_ular)
                  ){
 
                //restart game
            init();
            return;
            }
 
                //cek jika ular kena makanan/memakan makanan
                if(nx == makanan.x && ny == makanan.y){
 
                  var ekor = { x: nx, y: ny };
                  nilai++;
                  
                  //membuat makanan yang baru
                  create_makanan();
                  
              } else {
                  var ekor = array_ular.pop();
                  ekor.x = nx;
                  ekor.y = ny;
              }
 
              array_ular.unshift(ekor);
 
              for (var i = 0; i < array_ular.length; i++) {
                  var c = array_ular[i];
                  paint_cell(c.x, c.y);
              }
 
              paint_cell(makanan.x, makanan.y);    
 
                //membuat penilaian skor
                var nilai_text = "nilai: " + nilai;
                ctx.fillText(nilai_text, 5, tinggi - 5);
            }
 
            function paint_cell(x, y) {
                ctx.fillStyle = "#1abc9c";
                ctx.fillRect(x * cw, y * cw, cw, cw);
                ctx.strokeStyle = "#ecf0f1";
                ctx.strokeRect(x * cw, y * cw, cw, cw);
            }
 
            function cek_tabrakan(x, y, array) {
                for (var i = 0; i < array.length; i++) {
                  if (array[i].x == x && array[i].y == y) return true;
              }
              return false;
            }
 
              //kontrol ular dengan keyboard
              $(document).keydown(function(e) {
                var key = e.which;
                if (key == "37" && tekan != "right") tekan = "left";
                else if (key == "38" && tekan != "down") tekan = "up";
                else if (key == "39" && tekan != "left") tekan = "right";
                else if (key == "40" && tekan != "up") tekan = "down";
            });
            });
 
            </script>
			</center>
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


	/* AJAX */
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