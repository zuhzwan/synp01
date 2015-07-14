<?php
include '../../koneksi/koneksi.php';
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("insert into tadmin values('".$_POST['nama']."','".$_POST['password']."','".$_POST['hakakses']."')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='../?page=user';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tadmin set Password='".$_POST[password]."', User='".$_POST[hakakses]."' where Nama='".$_POST[nama]."'");
		header('location:../?page=user');
	}
?>