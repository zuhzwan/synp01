<?php
include '../../koneksi/koneksi.php';
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("insert into tsiswa values('".$_POST['nis']."','".$_POST['nama']."','".$_POST['idkelas']."')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='../?page=siswa';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tsiswa set Nama='".$_POST[nama]."', IdKelas='".$_POST[idkelas]."' where NIS='".$_POST[nis]."'");
		header('location:../?page=siswa');
	}
?>