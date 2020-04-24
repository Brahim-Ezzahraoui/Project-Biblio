<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Authentification du lecteur</h1>
<form action="" method="post">
<table>
<tr>	
	<td>Nom de Lecteur </td><td>:<input type="text" name="nomLect"></td>
</tr><tr>
	<td>Mot de passe </td><td>:<input type="password" name="motdeps"></td>
</tr><tr>
	<td><input type="submit" name="login" value="Login"></td>
</tr></table>
</form>
<?php 
if(isset($_POST['login'])){
	$con = mysqli_connect('localhost','root','','librairie');
	$query = " SELECT `lecnom`,`lecnum`, `lecmotdepasse` FROM `lecteurs`";
	$queryfire = mysqli_query($con, $query);
	$num = mysqli_num_rows($queryfire);
	if($num > 0){
		while($log = mysqli_fetch_array($queryfire)){
			$name=$log['lecnom'];
			$pass=$log['lecmotdepasse'];
			if ($_POST['nomLect']==$name && $_POST['motdeps']== $pass) {
				session_start();
				$_SESSION['nomLect']=$_POST['nomLect'];
				header("Location: gestionLecteur.php");
			}else{
				header("Location: gestionDuLecteur.php");
			}
		}
	}

}
?>
</body>
</html>