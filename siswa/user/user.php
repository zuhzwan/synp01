<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['id'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah User</h2>
	<form action="user/aksi_user.php" method="post" name="tambah" >
		<div class="group">
		<label>Nama</label><br>
		<input type="text" name="nama"></input>
		</div>
		<div class="group">
		<label>Password</label><br>
		<input type="text" name="password"></input>
		</div>
		<div class="group">
		<label>Hak Akses</label><br>
		<input type="text" name="hakakses" ></input>
		</div>
		
        <input type="submit"  name="add" value="Tambah"></input>     
	</form>
</div>
<?php
} elseif( $_GET['aks'] == "edit" AND $_GET['id'] ){
$data	= "select * from tadmin where Nama='".$syarat."'";
$hasil	= mysql_query($data);
$row	= mysql_fetch_array($hasil);
?>  
<div id="isi">
<h2>Edit User</h2>
	<form action="user/aksi_user.php" method="post" name="edit" >
		<div class="group">
		<label>Nama</label><br>
		<input type="text" readonly  name="nama" value="<?php echo $row['Nama'];?>"></input>
		<input type="hidden" readonly  name="nama" value="<?php echo $row['Nama'];?>"></input>
		</div>
		<div class="group">
		<label>Password</label><br>
		<input type="text"  name="password" value="<?php echo $row['Password'];?>"></input>
		</div>
		<div class="group">
		<label>ID Kelas</label><br>
		<input type="text" name="hakakses" value="<?php echo $row['User'];?>"></input>
		</div>
		
        <input type="submit" name="edit" value="Simpan"></input>
	</form>
</div>
<?php } elseif ( $_GET['aks'] == "hapus" AND $_GET['id'] ){
	$sql=mysql_query("DELETE FROM  tadmin WHERE Nama='".$syarat."'");
	$hasil=mysql_query($sql); 
	if ($hasil==0) { //echo "Tambah Data User Berhasil";
				?>
				<script>
					document.location='?page=user';
				</script>
				<?php
			}

} else{
?>
<div id="isi">
<h2>Data User</h2>
 <?php
 $view=mysql_query("SELECT * FROM tadmin");?>
<a class="tambah" href="?page=user&aks=tambah"/>Tambah</a>
<table id="table-a">
        <thead>
        <tr><th>Nama</th>
            <th>Password</th>
            <th>Hak Akses</th>
            <th width="90">Aksi</th>
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
            <td><?php echo $row[Nama]; ?></td>
            <td><?php echo $row[Password]; ?></td>
            <td><?php echo $row[User]; ?></td>
            <td>
				<a class="edit" href='?page=user&aks=edit&id=<?php echo $row[Nama]; ?>'>Edit</a>
				<a class="hapus" href='?page=user&aks=hapus&id=<?php echo $row[Nama]; ?>'>Hapus</a>
			</td>
        </tr>
	 <?php } ?>
        </tbody>
        </table>
</div>
<?php
}
?>