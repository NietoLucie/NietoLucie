<?php
/********************************************************
  Le fichier film.php
********************************************************/


include("connexion.php"); // Connexion à la BD
if(isset($_GET['id'])) { // l'id du film est passé en GET !
	
	// Les infos sur le film
	$sql = "SELECT * FROM film WHERE id=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['id']));
	while($line = $q->fetch()) { // Etape 3 : on parcours le résultat
		echo $line['titre']." est un filme de ".$line['annee']." vue par ".$line['nbSpectateurs']."<br>";
	}
	

	// Les infos sur le réalisateur du film
	$sql = "SELECT * FROM personne where id=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['id']));
	while($line = $q->fetch()) { // Etape 3 : on parcours le résultat
		echo $line['nom']." ".$line['prenom']." viens de ".$line['pays']." et est né le ".$line['naissance'];
	}	
	

	echo "<br />Acteurs : <ul>";
	// Les infos sur les acteurs du film
	$sql = "SELECT * FROM joue INNER JOIN personne on idActeur=personne.id WHERE idFilm=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['id']));
	while($line = $q->fetch()) { // Etape 3 : on parcours le résultat
		echo $line['nom']." ".$line['prenom']." salaire ".$line['salaire']."<br>";
	}	
		
		
		
	echo "</ul>";	

}

?>

