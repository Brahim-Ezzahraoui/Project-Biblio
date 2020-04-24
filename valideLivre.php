<?php
if(isset($_POST['enregistrer'])){
	echo"<h1>Validation d’un livre</h1>";
	echo"<table>";
	echo"<tr><td>Nom de l'auteur </td><td style='color: green'>: ".$_POST['NomAuteur']."</td></tr>";
	echo"<tr><td>Prénom de l'auteur </td><td style='color: green'>: ".$_POST['PrenomAuteur']."</td></tr>";
	echo"<tr><td>Titre </td><td style='color: green'>: ".$_POST['titre']."</td></tr>";
	echo"<tr><td>Catégorie </td><td style='color: green'>: ".$_POST['Categorie']."</td></tr>";
	echo"<tr><td>Numéro ISBN</td><td style='color: green'>: ".$_POST['isbn']."</td></tr>";
	echo"</table>";
}




?>