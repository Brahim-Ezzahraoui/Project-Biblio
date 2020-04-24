<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Gestion de Lecteur</h1>
<br>
<p>Le lecteur n'est pas reconnu</p>
<p>Cliquer <a href="index.php">ici</a> pour une nouvelle identification</p>
<br>
<h3>Enregistrement d'un lecteur</h3>
<p>Si vous étres un nouveau lecteur,veuillez vous enregister en remplissant le formulaire ci-dessous :</p>
<form action="valideLecteur2.php" method="post">
<table>
<tr>	
	<td>Nom </td><td>:<input type="text" name="nom"></td>
</tr><tr>
	<td>Prénom </td><td>:<input type="text" name="prenom"></td>
</tr><tr>
</tr><tr>
	<td>Mot de passe </td><td>:<input type="password" name="passe"></td>
</tr><tr>
	<td>Adresse </td><td>:<input type="text" name="adresse"></td>
</tr><tr>
	<td>Code Postal </td><td>:<input type="text" name="codePostal"></td>
</tr><tr>	
	<td>Ville </td><td>:<input type="text" name="ville"></td>
</tr><tr>
	<td><input type="submit" name="valider" value="valider"></td>
</tr></table>
</form>
</body>
</html>