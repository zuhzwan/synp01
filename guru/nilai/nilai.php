<?php
include '../koneksi/koneksi.php';
$syarat=$_GET['nip'];
if( $_GET['aks'] == "tambah" ){
?>
<div id="isi">
<h2>Tambah Soal</h2>
	<form action="guru/aksi_guru.php" method="post" name="tambah" >
		<div class="group">
		<label>No.</label><br>
		<input type="text" name="nomor"></input>
		</div>
		<div class="group">
		<label>NIP</label><br>
		<input type="text" name="nip"></input>
		</div>
		<div class="group">
		<label>Mata Pelajaran</label><br>
		<select name="matpel">
	  	<?php
			$matpelnya=mysql_query("SELECT * FROM tmatpel");
			while($row2=mysql_fetch_array($matpelnya)){
				echo "<option value=\"$row2[IdMatPel]\">$row2[Matpel]</option>";
		}
		?>
	  </select>
		</div>
		<div class="group">
		<label>Soal</label><br>
		<textarea name="input_soal" cols="40" rows="5"></textarea>
		</div>
		<div class="group">
		<label>Jawaban A</label><br>
		<input type="text"  cols="40" name="jawaban_A" ></input>
		</div>
		<div class="group">
		<label>Jawaban B</label><br>
		<input type="text"  cols="40" name="jawaban_B" ></input>
		</div>
		<div class="group">
		<label>Jawaban C</label><br>
		<input type="text"  cols="40" name="jawaban_C" ></input>
		</div>
		<div class="group">
		<label>Jawaban D</label><br>
		<input type="text"  cols="40" name="jawaban_D" ></input>
		</div>
		<div class="group">
		<label>Jawaban Benar</label><br>
		<input type="text" name="jawaban_benar" ></input>
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
<h2>Daftar Soal</h2>
 <?php
 $view=mysql_query("SELECT * FROM tnilai");?>
<table id="table-a">
        <thead>
         <tr><th>ID Nilai</th>
            <th>NIS</th>
            <th>Tanggal Ujian</th>
            <th>ID Matpel</th>
            <th>KKM</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Aksi</th>
           
        </tr>
        </thead>
        <tbody>
    <?php
	while($row=mysql_fetch_array($view)){
	?>
	
		<tr>
			<td><?php echo $row[IdNilai]; ?></td>
			<td><?php echo $row[NIS]; ?></td>
			<td><?php echo $row[tanggal_ujian]; ?></td>
			<td><?php echo $row[IdMatPel]; ?></td>
			<td>78</td>
			<td><?php echo $row[Nilai]; ?></td>
			<td></td>
		
			<td>
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