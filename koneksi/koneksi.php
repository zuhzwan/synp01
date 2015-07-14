<?php
$host="localhost";
$user="root";
$pass="";
$db="ulangan";

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{
	echo "Gagal terhubung dengan database, Cek koneksi kembali...!!!";
}
?>