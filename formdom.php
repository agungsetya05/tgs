<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>KALKULATOR DOM</h1>
    <form action="" name="formku">
        <input type="text" placeholder="ANGKA 1" name="angka1">
        <input type="text" placeholder="ANGKA 2" onchange="jml()" name="angka2">
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
    </script>
</body>
</html>