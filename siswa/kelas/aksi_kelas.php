<?php
include '../../koneksi/koneksi.php';
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("insert into tkelas values('".$_POST['idkelas']."','".$_POST['kelas']."')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='../?page=kelas';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tkelas set Kelas='".$_POST[kelas]."' where IdKelas='".$_POST[idkelas]."'");
		header('location:../?page=kelas');
	}
?>