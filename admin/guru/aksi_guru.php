<?php
include '../../koneksi/koneksi.php';
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("insert into tguru values('".$_POST['nip']."','".$_POST['nama']."','".$_POST['idmatpel']."','".$_POST['idkelas']."')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='../?page=guru';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tguru set Nama='".$_POST[nama]."', IdMatpel='".$_POST[idmatpel]."', IdKelas='".$_POST[idkelas]."' where NIP='".$_POST[nip]."'");
		header('location:../?page=guru');
	}
?>