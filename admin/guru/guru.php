<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['nip'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah Guru</h2>
	<form action="guru/aksi_guru.php" method="post" name="tambah" >
		<div class="group">
		<label>NIP</label><br>
		<input type="text" name="nip"></input>
		</div>
		<div class="group">
		<label>Nama</label><br>
		<input type="text" name="nama"></input>
		</div>
		<div class="group">
		<label>ID Mapel</label><br>
		<input type="text" name="idmatpel" ></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" ></input>
		</div>
		
        <input type="submit"  name="add" value="Tambah"></input>     
	</form>
</div>
<?php
} elseif( $_GET['aks'] == "edit" AND $_GET['nip'] ){
$data	= "select * from tguru where NIP=$syarat";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>  
<div id="isi">
<h2>Edit Guru</h2>
	<form action="guru/aksi_guru.php" method="post" name="edit" >
		<div class="group">
		<label>NIP</label><br>
		<input type="text" readonly  name="nip" value="<?php echo $row['NIP'];?>"></input>
		<input type="hidden" readonly  name="nip" value="<?php echo $row['NIP'];?>"></input>
		</div>
		<div class="group">
		<label>Nama</label><br>
		<input type="text"  name="nama" value="<?php echo $row['Nama'];?>"></input>
		</div>
		<div class="group">
		<label>ID Mapel</label><br>
		<input type="text" name="idmatpel" value="<?php echo $row['IdMatPel'];?>"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="idkelas" value="<?php echo $row['IdKelas'];?>"></input>
		</div>
		
        <input type="submit" name="edit" value="Simpan"></input>
	</form>
</div>
<?php } elseif ( $_GET['aks'] == "hapus" AND $_GET['nip'] ){
	$sql=mysql_query("DELETE FROM  tguru WHERE NIP=$syarat");
	$hasil=mysql_query($sql); 
	if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='?page=guru';
				</script>
				<?php
			}

} else{
?>
<div id="isi">
<h2>Data Guru</h2>
 <?php
 $view=mysql_query("SELECT * FROM tguru");?>
<a class="tambah" href="?page=guru&aks=tambah"/>Tambah</a>
<table id="table-a">
        <thead>
        <tr><th>NIP</th>
            <th>Nama</th>
            <th>ID Mapel</th>
            <th>ID Kelas</th>
            <th width="90">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
            <td><?php echo $row[NIP]; ?></td>
            <td><?php echo $row[Nama]; ?></td>
            <td><?php echo $row[IdMatPel]; ?></td>
            <td><?php echo $row[IdKelas]; ?></td>
            <td>
				<a class="edit" href='?page=guru&aks=edit&nip=<?php echo $row[NIP]; ?>'>Edit</a>
				<a class="hapus" href='?page=guru&aks=hapus&nip=<?php echo $row[NIP]; ?>'>Hapus</a>
			</td>
        </tr>
	 <?php } ?>
        </tbody>
        </table>
</div>
<?php
}
?>