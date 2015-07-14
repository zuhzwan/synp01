<div class="logo">
				<?php    
				$logo=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='13'");
				$l=mysql_fetch_array($logo);
				
				echo "<a href='index.php' title='Halaman Depan'><img src='images/$l[isi_pengaturan]' width='130px' alt='Logo sekolah'></a>";
				?>
			</div>
			
			<div class="sekolah">
				<?php    
				$alamatsekolah=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='12'");
				$a=mysql_fetch_array($alamatsekolah);
				
				$telp=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='9'");
				$te=mysql_fetch_array($telp);
				?>
				<h3><a href="index.php" title="Kembali ke halaman utama"><?php    echo "$ns[isi_pengaturan]";?></a></h3><br>
				<p><?php    echo "$a[isi_pengaturan]<br>Telp: $te[isi_pengaturan]";?></p>
			</div>
			
			<div class="cariform">
			<form method="POST" action="cari-berita.html">
			<input type="text" class="cari" name="cari"><input type="submit" class="tombol" value="Cari">
			</form>
			</div>
			
			
			 
    .halaman{
    margin : 100px 0 0 0;
    height:auto;
    background-color: #000;
    width: 100%;
    font-family: 'Open Sans', Arial, sans-serif;
	float:right;
	
    }
	
	.sidebar{
    background-color: #004050;
    width: 200px;
	height:460px ;
     
     
    font-family: 'Open Sans', Arial, sans-serif;
    padding-bottom:80px;
	margin-top:50px;
	float:left;
	}
    
	.user{
	padding-top:10px;
	}
	.user img{margin:0px 0px 0px 60px;}
	.user p{color:#ffffff; font-size:12px; text-align:center;line-height: 34px;}
	
    

	
	<html>
<head>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
   $(document).ready(function() {
      /** Membuat Waktu Mulai Hitung Mundur Dengan 
       * var detik = 0,
       * var menit = 1,
       * var jam = 1
       */
       var detik = 0;
       var menit = 1;
       var jam = 0;
 
      /**
       * Membuat function hitung() sebagai Penghitungan Waktu
       */
       function hitung() {
          /** setTimout(hitung, 1000) digunakan untuk 
	   *  mengulang atau merefresh halaman selama 1000 (1 detik) */
	   setTimeout(hitung,1000);
 
	  /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
	   $('#timer').html( 'Sisa Waktu : ' + jam + ' Jam - ' + menit + ' Menit - ' + detik + ' Detik ');
 
	  /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
	   detik --;
 
	  /** Jika var detik < 0
	   *  var detik akan dikembalikan ke 59
	   *  Menit akan Berkurang 1
	   */
	   if(detik < 0) {
	      detik = 59;
	      menit --;
 
	      /** Jika menit < 0
	       *  Maka menit akan dikembali ke 59
	       *  Jam akan Berkurang 1
	       */
	       if(menit < 0) {
 		  menit = 59;
		  jam --;
 
		  /** Jika var jam < 0
		   *  clearInterval() Memberhentikan Interval 
		   *  Dan Halaman akan membuka http://tahukahkau.com/
		   */
		   if(jam < 0) { 
                      clearInterval();
 		      window.location = "http://localhost/ujian/admin";
                   }
	       }
	   } 		
        }
 	/** Menjalankan Function Hitung Waktu Mundur */
        hitung();
   });
// ]]></script>
</head>
<body>

<div id='timer'></div>
</body>
</html>
         