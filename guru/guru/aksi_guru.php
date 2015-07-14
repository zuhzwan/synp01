<?php
include '../../koneksi/koneksi.php';
 
 
 
    if ($_POST['add']=="Tambah") {
        $sql=mysql_query("INSERT INTO tsoal VALUES ('$_POST[nomor]',
											   '$_POST[matpel]',
											   '$_POST[nip]',
											   '$_POST[input_soal]',
											   '$_POST[jawaban_A]',
											   '$_POST[jawaban_B]',
											   '$_POST[jawaban_C]',
											   '$_POST[jawaban_D]',
											   '$_POST[jawaban_benar]')");
		$hasil=mysql_query($sql); 
		if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					alert("Istirahat Sejenak.... ");
					document.location='../?page=soal&aks=tambah';
				</script>
				<?php
			}

    } else if ($_POST['edit']=="Simpan"){
		$sql=mysql_query("update tguru set Nama='".$_POST[nama]."', IdMatpel='".$_POST[idmatpel]."', IdKelas='".$_POST[idkelas]."' where NIP='".$_POST[nip]."'");
		header('location:../?page=guru');
	}
?>