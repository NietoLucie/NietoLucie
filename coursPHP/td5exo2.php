<?php
session_start();

include("connexion.php");
include("balises.php");
$sql = "SELECT passwd FROM user WHERE login = $_POST['login']"; //
$query = $pdo->prepare($sql); // Etpae 1 : On prépare la requête

$query->execute(); // Etape 2 :On l'exécute.
										 // Pas de paramètre dans la requête

if(isset($_POST['login'])) { // Le formulaire a été soumis
	if(isset($_POST['passwd'])){
		if(md5($_POST['passwd']) === $query->fetch();)
	}
}

if(isset($_GET['action']) && $_GET['action']=="deconnexion") { // Il taut détruire la session
	session_destroy();
}

if(isset($_SESSION['id'])) { // On est loggé
	if(isset($_GET["style"]))
 		if($_GET['style']=="style1.css")
 			$_SESSION["style"] = "style1.css";
 		elseif ($_GET['style']=="style2.css")
 			$_SESSION["style"] = "style2.css";
 	else {
 		$_SESSION["style"] = 1;
 	}

 	$styleSheet = $_SESSION["style"];
} else {
	echo(
		<form action='#' method='POST'>
			<imput type="text" name="login" value="login">
			<input type="text" name="passwd" value="password">
		</form>
	);
}


?>



<html lang="fr">
<head>
  <meta charset="utf-8">
   <title>Testons les cookies</title>
   <link rel="stylesheet" type="text/css" href="<?php echo $styleSheet ?>" />
</head>

<body>
<form action='#' method='GET'>
changer le style :
<select name='style'>
<option value='style1.css'>très moche</option>
<option value='style2.css'>moche</option>
</select>
<input type='submit' value='ok' />
</form>


<h1>Histoire du PHP</h1>
<p>
Le langage PHP a été mis au point au début d'automne 1994 par Rasmus Lerdorf.
Ce langage de script lui permettait de conserver la trace des utilisateurs
venant consulter son CV sur son site, grâce à l'accès à une base de données
par l'intermédiaire de requêtes SQL. Ainsi, étant donné que de nombreux
internautes lui demandèrent ce programme, Rasmus Lerdorf mit en ligne en
 1995 la première version de ce programme qu'il baptisa Personal Sommaire
  Page Tools, puis Personal Home Page v1.0 (traduisez page personnelle version 1.0).
<br />

Etant donné le succès de PHP 1.0, Rasmus Lerdorf décida d'améliorer ce
langage en y intégrant des structures plus avancées telles que des boucles,
des structures conditionnelles, et y intégra un package permettant d'interpréter
les formulaires qu'il avait développé (FI, Form Interpreter) ainsi que
 le support de mSQL. C'est de cette façon que la version 2 du langage,
 baptisée pour l'occasion PHP/FI version 2, vit le jour durant l'été 1995.
 Il fut rapidement utilisé sur de nombreux sites (15000 fin 1996, puis 50000 en milieu d'année 1997).
<br />

A partir de 1997, Zeev Suraski et Andi Gurmans rejoignirent Rasmus pour
former une équipe de programmeurs afin de mettre au point PHP 3 (Stig Bakken,
Shane Caraveo et Jim Winstead les rejoignirent par la suite). C'est ainsi que

<br />
la version 3.0 de PHP fut disponible le 6 juin 1998.
<br />

A la fin de l'année 1999 la version 4.0 de PHP, baptisée PHP4, est apparue.
PHP en est aujourd'hui à sa cinquième version.
</p>
</body>
</html>
