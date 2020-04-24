<?php
if(isset($_POST['enregistrer'])){
	echo"<h1>Validation d’un lecteur</h1>";
	echo"<table>";
	echo"<tr><td>Nom </td><td style='color: green'>: ".$_POST['nom']."</td></tr>";
	echo"<tr><td>Prénom </td><td style='color: green'>: ".$_POST['prenom']."</td></tr>";
	echo"<tr><td>Adresse </td><td style='color: green'>: ".$_POST['adresse']."</td></tr>";
	echo"<tr><td>Ville </td><td style='color: green'>: ".$_POST['ville']."</td></tr>";
	echo"<tr><td>Code Postal </td><td style='color: green'>: ".$_POST['codePostal']."</td></tr>";
	echo"</table>";
}




?>