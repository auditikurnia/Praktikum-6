<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Pemrograman PHP dengan Array </title>
</head>
<body>
	<?php
	//penulisan array dapat dibuat sebagai berikut
	$nama[] = "Agung Teguh";
	$nama[] = "Wibowo";
	$nama[] = "Almais";
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";
	//menghitung jumlah elemen array
	$jum_array = count($nama); 
	echo "jumlah elemen array = ". $jum_array;
	?>
</body>
</html>