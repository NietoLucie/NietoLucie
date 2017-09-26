<?php
/********************************************************
  Le fichier tous.php
********************************************************/

include("connexion.php"); // Connexion à la BD
?>
<h3>Liste des films</h3>

<?php
$listFilm = "<ul>";
// La liste des film
$sql = "SELECT * FROM film"; // La requête
$q = $pdo->prepare($sql);
$q->execute();
while($line=$q->fetch()) {
	$listFilm .= "<li><a href=film.php?id=".$line['id'].">".$line['titre']."</a></li>";
}
$listFilm .= "</ul>";
echo $listFilm;


echo "<h3>Liste des acteurs</h3>";
$sql = "SELECT * FROM personne"; // La requête
$q = $pdo->prepare($sql);
$q->execute();

while($line=$q->fetch()) {
	// A completer
	// Chaque personne fois avoir un lien vers personne.php avec l'id adéquat
}




?>
