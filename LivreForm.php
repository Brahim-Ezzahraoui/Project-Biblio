<!DOCTYPE html>
<html>
<head>
	<title>Enregistrement d’un livre</title>
</head>
<body>
	<h1> Enregistrement d’un livre </h1>
<form action="valideLivre.php" method="post">
<table>
<tr>	
	<td>Nom de l'auteur </td><td>:<input type="text" name="NomAuteur"></td>
</tr><tr>
	<td>Prénom de l'auteur </td><td>:<input type="text" name="PrenomAuteur"></td>
</tr><tr>
	<td>Titre </td><td>:<input type="text" name="titre"></td>
</tr><tr>
	<td>Catégorie </td><td>:<select name="Categorie" style="width:250px;">
		<option value="Roman">Roman</option>
		<option value="Science-fiction">Science-fiction</option>
		<option value="Policier">Policier</option>
		<option value="Autre">Autre</option>
	</select></td>
</tr><tr>	
	<td>Numéro ISBN </td><td>:<input type="text" name="isbn"></td>
</tr><tr>
	<td><input type="submit" name="enregistrer" value="Enregistrer"></td>
</tr></table>
</form>
</body>
</html>