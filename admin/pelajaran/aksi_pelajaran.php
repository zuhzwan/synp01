<?php
include '../../koneksi/koneksi.php';
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("insert into tmatpel values('".$_POST['idmatpel']."','".$_POST['matpel']."','".$_POST['idkelas']."')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='../?page=mt_pelajaran';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tmatpel set Matpel='".$_POST[matpel]."', IdKelas='".$_POST[idkelas]."' where IdMatPel='".$_POST[idmatpel]."'");
		header('location:../?page=mt_pelajaran');
	}
?>