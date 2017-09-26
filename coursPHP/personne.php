<?php
/********************************************************
  Le fichier personne.php
********************************************************/

include("connexion.php"); // Connexion à la BD

if(isset($_GET['id']) && is_numeric($_GET['id'])) { // l'id de la personne doit être donné en GET
	
	// Les infos sur la personne
	$sql = "SELECT * FROM personne WHERE id=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($_GET['id']));
	
	while($line = $q->fetch()) { // Etape 3 : on parcours le résultat
		echo "
	}


	echo "<br />R&eacute;alisteur de  : 
	<ul>";
	$sql = "SELECT * FROM film  WHERE idRealisateur=?"; // Quels films il a réalisé

	// A completer
		
	echo "</ul>";	


	echo "<br />Acteur dans : 
	<ul>";
	// Dans quels films il joue
	$sql = "SELECT * FROM joue INNER JOIN film on idFilm=film.id WHERE idActeur=?";

	// A completer
	
	echo "</ul>";	

}

?>
