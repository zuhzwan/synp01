<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['nis'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah Siswa</h2>
	<form action="siswa/aksi_siswa.php" method="post" name="tambah" >
		<div class="group">
		<label>NIS</label><br>
		<input type="text" name="nis"></input>
		</div>
		<div class="group">
		<label>Nama</label><br>
		<input type="text" name="nama"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" ></input>
		</div>
		
        <input type="submit"  name="add" value="Tambah"></input>     
	</form>
</div>
<?php
} elseif( $_GET['aks'] == "edit" AND $_GET['nis'] ){
$data	= "select * from tsiswa where NIS=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>  
<div id="isi">
<h2>Edit Guru</h2>
	<form action="siswa/aksi_siswa.php" method="post" name="edit" >
		<div class="group">
		<label>NIS</label><br>
		<input type="text" readonly  name="nis" value="<?php echo $row['NIS'];?>"></input>
		<input type="hidden" readonly  name="nis" value="<?php echo $row['NIS'];?>"></input>
		</div>
		<div class="group">
		<label>Nama</label><br>
		<input type="text"  name="nama" value="<?php echo $row['Nama'];?>"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" value="<?php echo $row['IdKelas'];?>"></input>
		</div>
		
        <input type="submit" name="edit" value="Simpan"></input>
	</form>
</div>
<?php } elseif ( $_GET['aks'] == "hapus" AND $_GET['nis'] ){
	$sql=mysql_query("DELETE FROM  tsiswa WHERE NIS=$syarat");
	$hasil=mysql_query($sql); 
	if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='?page=siswa';
				</script>
				<?php
			}

} else{
?>
<div id="isi">
<h2>Data Siswa</h2>
 <?php
 $view=mysql_query("SELECT * FROM tsiswa");?>
<a class="tambah" href="?page=siswa&aks=tambah"/>Tambah</a>
<table id="table-a">
        <thead>
        <tr><th>NIS</th>
            <th>Nama</th>
            <th>ID Kelas</th>
            <th width="90">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
            <td><?php echo $row[NIS]; ?></td>
            <td><?php echo $row[Nama]; ?></td>
            <td><?php echo $row[IdKelas]; ?></td>
            <td>
				<a class="edit" href='?page=siswa&aks=edit&nis=<?php echo $row[NIS]; ?>'>Edit</a>
				<a class="hapus" href='?page=siswa&aks=hapus&nis=<?php echo $row[NIS]; ?>'>Hapus</a>
			</td>
        </tr>
	 <?php } ?>
        </tbody>
        </table>
</div>
<?php
}
?>