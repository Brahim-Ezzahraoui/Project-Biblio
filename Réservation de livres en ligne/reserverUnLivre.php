<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Réserver un livre</h1>
<h3>Vous désirez réserver le livre suivant : </h3>
<form method="post" action="confirmationReservation.php?CodeLivre=<?php echo $_GET['CodeLivre'];  ?>">
	<table border="">
		<tr>
			<td style="color: red">Code du Livre</td>
			<td name="CodeLivre"><?php echo $_GET['CodeLivre'];  ?></td>
		</tr>
		<tr>
			<td style="color: red">Nom de l'Auteur</td>
			<td><?php echo $_GET['NomAuteur'];  ?></td>
		</tr>
		<tr>
			<td style="color: red">Prenom de l'Auteur</td>
			<td><?php echo $_GET['PrenomAuteur'];  ?></td>
		</tr>
		<tr>
			<td style="color: red">Titre</td>
			<td><?php echo $_GET['Titre'];  ?></td>
		</tr>
		<tr>
			<td style="color: red">Categorie</td>
			<td><?php echo $_GET['Categorie'];  ?></td>
		</tr>
		<tr>
			<td style="color: red">ISBN</td>
			<td><?php echo $_GET['ISBN'];  ?></td>
		</tr>								
	</table>
	<br>
	<input type="submit" name="confirmer" value="confirmer">
</form>
</body>
</html>
