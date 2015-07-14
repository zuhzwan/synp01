<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['id'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah Kelas</h2>
	<form action="kelas/aksi_kelas.php" method="post" name="tambah" >
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas"></input>
		</div>
		<div class="group">
		<label>Kelas</label><br>
		<input type="text" name="kelas"></input>
		</div>
		
        <input type="submit"  name="add" value="Tambah"></input>     
	</form>
</div>
<?php
} elseif( $_GET['aks'] == "edit" AND $_GET['id'] ){
$data	= "select * from tkelas where IdKelas=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>  
<div id="isi">
<h2>Edit Kelas</h2>
	<form action="kelas/aksi_kelas.php" method="post" name="edit" >
		<div class="group">
		<label>ID MatPel</label><br>
		<input type="text" readonly  name="idkelas" value="<?php echo $row['IdKelas'];?>"></input>
		<input type="hidden" readonly  name="idkelas" value="<?php echo $row['IdKelas'];?>"></input>
		</div>
		<div class="group">
		<label>Kelas</label><br>
		<input type="text"  name="kelas" value="<?php echo $row['Kelas'];?>"></input>
		</div>
		
		
        <input type="submit" name="edit" value="Simpan"></input>
	</form>
</div>
<?php } elseif ( $_GET['aks'] == "hapus" AND $_GET['id'] ){
	$sql=mysql_query("DELETE FROM  tkelas WHERE IdKelas=$syarat");
	$hasil=mysql_query($sql); 
	if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='?page=kelas';
				</script>
				<?php
			}

} else{
?>
<div id="isi">
<h2>Kelas</h2>
 <?php
 $view=mysql_query("SELECT * FROM tkelas");?>
<a class="tambah" href="?page=kelas&aks=tambah"/>Tambah</a>
<table id="table-a">
        <thead>
        <tr><th>ID Kelas</th>
            <th>Kelas</th>
            <th width="90">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
            <td><?php echo $row[IdKelas]; ?></td>
            <td><?php echo $row[Kelas]; ?></td>
            <td>
				<a class="edit" href='?page=kelas&aks=edit&id=<?php echo $row[IdKelas]; ?>'>Edit</a>
				<a class="hapus" href='?page=kelas&aks=hapus&id=<?php echo $row[IdKelas]; ?>'>Hapus</a>
			</td>
        </tr>
	 <?php } ?>
        </tbody>
        </table>
</div>
<?php
}
?>