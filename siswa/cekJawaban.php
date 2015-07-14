<?php
	include "../koneksi/koneksi.php";
	$Id_matpel =$_POST[id_matpel];
	$Tanggal =$_POST[tanggal_ulangan];
	$NIS =$_POST[nis_ujian];
	
	$nilai=0;
	$benar1=$_POST[jawaban_benar0];
	$jawaban1=$_POST[jawabannya0];
	if($benar1==$jawaban1){
		$nilai+=10;
	}
	$benar2=$_POST[jawaban_benar1];
	$jawaban2=$_POST[jawabannya1];
	if($benar2==$jawaban2){
		$nilai+=10;
	}
	$benar3=$_POST[jawaban_benar2];
	$jawaban3=$_POST[jawabannya2];
	if($benar3==$jawaban3){
		$nilai+=10;
	}
	
	$benar4=$_POST[jawaban_benar3];
	$jawaban4=$_POST[jawabannya3];
	if($benar4==$jawaban4){
		$nilai+=10;
	}
	
	$benar5=$_POST[jawaban_benar4];
	$jawaban5=$_POST[jawabannya4];
	if($benar5==$jawaban5){
		$nilai+=10;
	}
	$benar6=$_POST[jawaban_benar5];
	$jawaban6=$_POST[jawabannya5];
	if($benar6==$jawaban6){
		$nilai+=10;
	}
	$benar7=$_POST[jawaban_benar6];
	$jawaban7=$_POST[jawabannya6];
	if($benar7==$jawaban7){
		$nilai+=10;
	}
	$benar8=$_POST[jawaban_benar7];
	$jawaban8=$_POST[jawabannya7];
	if($benar8==$jawaban8){
		$nilai+=10;
	}
	$benar9=$_POST[jawaban_benar8];
	$jawaban9=$_POST[jawabannya8];
	if($benar9==$jawaban9){
		$nilai+=10;
	}
	$benar10=$_POST[jawaban_benar9];
	$jawaban10=$_POST[jawabannya9];
	if($benar10==$jawaban10){
		$nilai+=10;
	}
	
	
	mysql_query("INSERT INTO tnilai VALUES ('0','$Tanggal','$Id_matpel','$nilai','$NIS')");
?>

<body bgcolor="#fff">
	<center><h1>TERIMA KASIH ANDA TELAH MELAKSANAKAN UJIAN ONLINE...</h1><br>
	<h3>Klik di sini untuk Melihat <a href="index.php">NILAI</a></h3></center>
	
</body>