<div id="isi">
<div class="subisi">
<h2>SOAL UJIAN</h2>
<?php
include '../koneksi/koneksi.php';
	if((isset($_POST['submit'])) AND ($_POST['matpel'] <> "")){
		$kelas=$_POST[kelas];
		$matpel=$_POST[matpel];
		$kelas=$_POST[kelas];
		$nis=$_POST[nis];
		$tanggal_ulangan=$_POST[tanggal_ulangan];
		$sql=mysql_query("SELECT * FROM tsoal WHERE IdMatPel='$matpel' ORDER BY RAND() LIMIT 0,5");
		//$ketemu=mysql_num_rows($query);
		
		?>
	<form method="post" action="cekJawaban.php">	
	<input type=hidden name="id_matpel" value="<?php echo $matpel;?>">
	<input type=hidden name="nis_ujian" value="<?php echo $_POST[nis];?>">
	<input type=hidden name="tanggal_ulangan" value="<?php echo $_POST[tanggal_ulangan];?>">
	
<table id="table-a">
		<thead>
         <tr><th>No</th>
            <th>Soal</th>
            <th></th>
            <th>Pilihan Jawaban</th>
           
        </tr>
        </thead>
	<?php
	
		$no=1;
		$nox=0;
			while($show=mysql_fetch_array($sql)){ ?>
		<tr>
			<td><?php echo $no?></td>
			<td><input type=hidden name="id_soal<?php=$nox?>" id=id_soal value='<?php echo $show[IdSoal];?>'>
				<textarea name=soal size=30 rows=6 readonly><?php echo $show[Pertanyaan];?></textarea>
			</td>
			<td>
			<input value=A type="checkbox" name="jawabannya<?php echo $nox;?>" id="jawabannya<?php echo $nox;?>" size=5><br>
			<input value=B type="checkbox" name="jawabannya<?php echo $nox;?>" id="jawabannya<?php echo $nox;?>" size=5><br>
			<input value=C type="checkbox" name="jawabannya<?php echo $nox;?>" id="jawabannya<?php echo $nox;?>" size=5><br>
			<input value=D type="checkbox" name="jawabannya<?php echo $nox;?>" id="jawabannya<?php echo $nox;?>" size=5>
			<input type="hidden"  id="jawaban_benar<?php echo $nox;?>" name="jawaban_benar<?php echo $nox;?>"  value='<?php echo $show[Jawaban];?>'>
			</td>
			<td>
						
						<input type=hidden name=jawabanA id=jawabanA value=A>A. <?php echo $show[JawabanA];?>
						
						<br><br>
						
						<input type=hidden name=jawabanB id=jawabanB value=B>B. <?php echo $show[JawabanB];?>
						
						<br><br>
						
						<input type=hidden name=jawabanC id=jawabanC value=C>C. <?php echo $show[JawabanC];?>
						
						<br><br>
						
						<input type=hidden name=jawabanD id=jawabanD value=D>D. <?php echo $show[JawabanD];?>
						
						
			</td>
			
			
		
        </tr>
		
	
		
			
			
			<?php	$nox++;
				$no++;
			}	
	?>	
	
	</table>
<input type="submit" value="Proses" name="submit"> 
	<input type="button" value="Batal" onClick="self.history.back()">	
	</form>
<?php
	}
?>
</div>
<div class="info">
	<h2> Sisa Waktu</h2>
	<br>
	<center><h3><?php include 'mundur.php';?></h3></center>
</div>
<div class="info">
	<h2> Informasi </h2>
	<p> Ujian Akan Ditutup Secara Otomatis Jika Waktu Ujian sudah Habis</p><br>
</div>
</div>