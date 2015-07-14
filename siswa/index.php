<!DOCTYPE HTML>
<html>
<head>
	<title>Sistem Ujian Online</title>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
		$(document).ready(function(){
		 $("#menu h3").click(function(){
		  //slide up all the link lists
		  $("#menu ul ul").slideUp();
		  //slide down the link list below the h3 clicked - only if its closed
		  if(!$(this).next().is(":visible"))
		  {
		   $(this).next().slideDown();
		  }
		 })
		})
		</script>
</head>

<body>
	<div id="wrapper">
		<?php include 'header.php';?>
		<div id="content">
		<?php include 'menu.php';?>
		
		<div id="isi">
		<?php
			switch($_REQUEST[page]){
		
			case "soal":
			include "guru/guru.php";
			break;
			
			case "nilai":
			include "nilai/nilai.php";
			break;
			
			case "ujian":
			include "guru/aksi_guru.php";
			break;
			
			case "kelas":
			include "kelas/kelas.php";
			break;
			
		
			
			case "user":
			include "user/user.php";
			break;
			
			case "home":
			include "home.php";
			break;
			
			default:
			include "home.php";
			break;
		
			}
            ?>
		</div>

		</div>
		
		
	</div>
</body>
</html>