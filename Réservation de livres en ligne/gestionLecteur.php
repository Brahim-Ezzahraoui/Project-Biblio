<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Gestion de Lecteur</h1>
	<?php
	session_start();
	$nameLecteur=$_SESSION['nomLect'];
	$con = mysqli_connect('localhost','root','','librairie');
	$query = "SELECT `lecnum` FROM `lecteurs` WHERE lecnom = '".$nameLecteur."'";
	$queryfire = mysqli_query($con, $query);
	$num = mysqli_num_rows($queryfire);
	if($num > 0){
		while($log = mysqli_fetch_array($queryfire)){

			echo"le Lecteur n° La ".$log['lecnum']." est reconnu";
		}
	}
	  ?>
	<h2>Voici la liste des ouvrages disponibles à la réservation</h2>
	<?php 
	echo "<table border='1px'><tr style='color: red'><th>CodeLivre</th><th>NomAuteur</th><th>PrenomAuteur</th><th>Titre</th><th>Categorie</th><th>ISBN</th><th></th></tr>";
	$query2 = "SELECT * FROM `livres` WHERE livdejareserve=0";
	$queryfire2 = mysqli_query($con, $query2);
	$num2 = mysqli_num_rows($queryfire2);
	if($num2 > 0){
		while($Des = mysqli_fetch_array($queryfire2)){
			echo"<tr><td>".$Des['livcode']."</td>";
			echo"<td>".$Des['livnomaut']."</td>";
			echo"<td>".$Des['livprenomaut']."</td>";
			echo"<td>".$Des['livtitre']."</td>";
			echo"<td>".$Des['livcategorie']."</td>";
			echo"<td>".$Des['livISBN']."</td>";
			echo"<td><a href='reserverUnLivre.php?CodeLivre=".$Des['livcode']."& NomAuteur=".$Des['livnomaut']."&PrenomAuteur=".$Des['livprenomaut']."&Titre=".$Des['livtitre']."&Categorie=".$Des['livcategorie']."&ISBN=".$Des['livISBN']."'>Réserver</a></td></tr>";
		}
		echo "</table>";
	}
	echo "<br><br>";
	 ?>
	<h2>Voici la liste de vos reservations</h2>
	<?php  
	echo "<table border='1px'><tr style='color: red'><th>CodeLivre</th><th>NomAuteur</th><th>PrenomAuteur</th><th>Titre</th><th>Categorie</th><th>ISBN</th></tr>";
	$query3 = "SELECT `livcode`,`livnomaut`,`livprenomaut`,`livtitre`,`livcategorie`,`livISBN` FROM `livres`,`emprunts` WHERE empcodelivre = 'livcode'  AND empnumlect ='".$log['lecnum']."'";
	$queryfire3 = mysqli_query($con, $query3);
	$num3 = mysqli_num_rows($queryfire3);
	if($num3 > 0){
		while($res = mysqli_fetch_array($queryfire3)){
			echo"<tr><td>".$res['livcode']."</td>";
			echo"<td>".$res['livnomaut']."</td>";
			echo"<td>".$res['livprenomaut']."</td>";
			echo"<td>".$res['livtitre']."</td>";
			echo"<td>".$res['livcategorie']."</td>";
			echo"<td>".$res['livISBN']."</td></tr>";
		}
		echo "</table>";
	}

	?>
</body>
</html>