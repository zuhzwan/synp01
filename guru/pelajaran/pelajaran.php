<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['id'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah Mata Pelajaran</h2>
	<form action="pelajaran/aksi_pelajaran.php" method="post" name="tambah" >
		<div class="group">
		<label>ID MatPel</label><br>
		<input type="text" name="idmatpel"></input>
		</div>
		<div class="group">
		<label>Mata Pelajaran</label><br>
		<input type="text" name="matpel"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" ></input>
		</div>
		
        <input type="submit"  name="add" value="Tambah"></input>     
	</form>
</div>
<?php
} elseif( $_GET['aks'] == "edit" AND $_GET['id'] ){
$data	= "select * from tmatpel where IdMatPel=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>  
<div id="isi">
<h2>Edit Guru</h2>
	<form action="pelajaran/aksi_pelajaran.php" method="post" name="edit" >
		<div class="group">
		<label>ID MatPel</label><br>
		<input type="text" readonly  name="idmatpel" value="<?php echo $row['IdMatPel'];?>"></input>
		<input type="hidden" readonly  name="idmatpel" value="<?php echo $row['IdMatPel'];?>"></input>
		</div>
		<div class="group">
		<label>Mata Pelajaran</label><br>
		<input type="text"  name="matpel" value="<?php echo $row['Matpel'];?>"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" value="<?php echo $row['IdKelas'];?>"></input>
		</div>
		
        <input type="submit" name="edit" value="Simpan"></input>
	</form>
</div>
<?php } elseif ( $_GET['aks'] == "hapus" AND $_GET['id'] ){
	$sql=mysql_query("DELETE FROM  tmatpel WHERE IdMatPel=$syarat");
	$hasil=mysql_query($sql); 
	if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='?page=mt_pelajaran';
				</script>
				<?php
			}

} else{
?>
<div id="isi">
<h2>Mata Pelajaran</h2>
 <?php
 $view=mysql_query("SELECT * FROM tmatpel");?>
<a class="tambah" href="?page=mt_pelajaran&aks=tambah"/>Tambah</a>
<table id="table-a">
        <thead>
        <tr><th>ID MatPel</th>
            <th>Mata Pelajaran</th>
            <th>ID Kelas</th>
            <th width="90">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
            <td><?php echo $row[IdMatPel]; ?></td>
            <td><?php echo $row[Matpel]; ?></td>
            <td><?php echo $row[IdKelas]; ?></td>
            <td>
				<a class="edit" href='?page=mt_pelajaran&aks=edit&id=<?php echo $row[IdMatPel]; ?>'>Edit</a>
				<a class="hapus" href='?page=mt_pelajaran&aks=hapus&id=<?php echo $row[IdMatPel]; ?>'>Hapus</a>
			</td>
        </tr>
	 <?php } ?>
        </tbody>
        </table>
</div>
<?php
}
?>