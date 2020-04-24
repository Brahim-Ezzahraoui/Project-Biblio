<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement d’un lecteur</title>
</head>
<body>
	<h1> Enregistrement d’un lecteur </h1>
<form action="valideLecteur.php" method="post">
<table>
<tr>	
	<td>Nom </td><td>:<input type="text" name="nom"></td>
</tr><tr>
	<td>Prénom </td><td>:<input type="text" name="prenom"></td>
</tr><tr>
	<td>Adresse </td><td>:<input type="text" name="adresse"></td>
</tr><tr>
	<td>Ville </td><td>:<input type="text" name="ville"></td>
</tr><tr>	
	<td>Code Postal </td><td>:<input type="text" name="codePostal"></td>
</tr><tr>
	<td><input type="submit" name="enregistrer" value="Enregistrer"></td>
</tr></table>
</form>
</body>
</html>