<?php include '../koneksi/koneksi.php'; ?>
<div id="isi">
<h2>Soal</h2>
 <?php
 $view=mysql_query("SELECT * FROM tsoal");?>
<table id="table-a">
        <thead>
        <tr><th>ID Soal</th>
            <th>ID Mapel</th>
            <th>Pertanyaan</th>
            <th>Pilihan 1</th>
            <th>Pilihan 2</th>
            <th>Pilihan 3</th>
            <th>Pilihan 4</th>
            <th>Jawaban</th>
           
        </tr>
        </thead>
        <tbody>
<?php
	while($row=mysql_fetch_array($view)){
	?>
        <tr>
			<td><?php echo $row[IdSoal]; ?></td>
			<td><?php echo $row[IdMatPel]; ?></td>
			<td><?php echo $row[Pertanyaan]; ?></td>
			<td><?php echo $row[JawabanA]; ?></td>
			<td><?php echo $row[JawabanB]; ?></td>
			<td><?php echo $row[JawabanC]; ?></td>
			<td><?php echo $row[JawabanD]; ?></td>
			<td><?php echo $row[Jawaban]; ?></td>
        </tr>
		<?php } ?> 
		
        </tbody>
        </table>
        
</div>







