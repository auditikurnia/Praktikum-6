<?php
if (empty($_POST['nama'])) {
	header("Location:inputKosong.php");
} else {
	if (empty($_POST['email'])) {
		header("Location:inputKosong.php");
	} else {
		echo "Welcome!<br><br>";
		echo "Nama 	: ".$_POST['nama']."<br>";
		echo "Email	: ".$_POST['email']."<br><br>";
	}
	date_default_timezone_set('Asia/Jakarta');
	$date=new DateTime('now');
	echo $date->format('d-m-Y  H:i:s');
}


?>


