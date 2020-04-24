<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Validation d'un lecteur</h1>
<hr align="left" width="98%" color="gray" size="2">
<?php 
	if(isset($_POST['valider'])){
	echo"<table>";
	echo"<table>";
	echo"<tr><td>Nom </td><td style='color: green'>: ".$_POST['nom']."</td></tr>";
	echo"<tr><td>Prénom </td><td style='color: green'>: ".$_POST['prenom']."</td></tr>";
	echo"<tr><td>Adresse </td><td style='color: green'>: ".$_POST['adresse']."</td></tr>";
	echo"<tr><td>Ville </td><td style='color: green'>: ".$_POST['ville']."</td></tr>";
	echo"<tr><td>Code Postal </td><td style='color: green'>: ".$_POST['codePostal']."</td></tr>";
	echo"</table>";
	$con = mysqli_connect('localhost','root','','librairie');
	$querry="INSERT INTO `lecteurs` VALUES('".rand(100,1000)."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['adresse']."','".$_POST['ville']."','".$_POST['codePostal']."','".$_POST['passe']."')";
	$reslt = mysqli_query($con, $querry);
}
 ?>
 <p>Vous étres enregistré dans la base de la bibliothèque,</p>
 <p>vous aver maintenant la possibilité de réserver des livres ou vous <a href="index.php">identifiant ici</a></p>
</body>
</html>