<?php
if(isset($_POST['confirmer'])){
	$date=date("Y-m-d");
	$dateRetour=date('Y-m-d', strtotime($date. ' + 5 days'));
	$NumRevervation=rand();
	echo"<h1>Confirmation de votre réservation</h1><br>";
	echo "<table><tr>";
	echo"<td>Votre réservation est confirmée sous le numero : </td>";
	echo"<td>".$NumRevervation."</td></tr>";
	echo"<td>Date de la réservation : </td>";
	echo"<td>".$date."</td></tr>";
	echo"<tr><td>Date de retour : </td>";
	echo"<td style='color:red'>".$dateRetour."</td></tr></table>";
	echo "<br>";
	echo "Vous pouvez revenir à la liste des livres disponible à la réservation en cliquant ";
	echo "<a href='gestionLecteur.php'>ici </a>";
	session_start();
	$nameLecteur=$_SESSION['nomLect'];
	$con = mysqli_connect('localhost','root','','librairie');
	$query = "SELECT `lecnum` FROM `lecteurs` WHERE lecnom = '".$nameLecteur."'";
	$queryfire = mysqli_query($con, $query);
	$num = mysqli_num_rows($queryfire);
	if($num > 0){
		while($log = mysqli_fetch_array($queryfire)){
	$query2 = "INSERT INTO `emprunts` VALUES('".$NumRevervation."','".$date."','".$dateRetour."','".$_GET['CodeLivre']."','".$log['lecnum']."') ";
	$reslt1 = mysqli_query($con, $query2);
	$query3="UPDATE `livres` SET livdejareserve=1 WHERE livcode ='".$_GET['CodeLivre']."'";
	$reslt2 = mysqli_query($con, $query3);
	}
	}

}
?>