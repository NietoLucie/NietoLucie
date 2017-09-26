
<?php
include("connexion.php"); // On se connecte à la base
?>

<form action="#" method="get">
<select name='pays'>
<?php
	
	$sql = "SELECT DISTINCT pays FROM personne"; // 
	$query = $pdo->prepare($sql); // Etpae 1 : On prépare la requête
	
	$query->execute(); // Etape 2 :On l'exécute. 
                       // Pas de paramètre dans la requête
	
	while($line = $query->fetch()) { // Etape 3 : on parcours le résultat
		echo "<option type='radio' name='$line[0]' value='$line[0]'>$line[0]</option>\n";
	}
	
?>
</select>

<input type='submit' />
</form>

<?php
// On veut que le formulaire est été soumis
if(isset($_GET['pays'])) {
	$sql = "SELECT nom FROM personne WHERE pays=?"; // 

	$query = $pdo->prepare($sql); // Etpae 1 : On prépare la requête
	                              // et celle-ci a un paramètre optionnel (le titre)
	
	$query->execute(array($_GET['pays'])); // Etape 2 :On l'exécute. 
	                                        // On remplace le ? par le titre donné 
	
	$listPersonne = "<ul>";
	while($line = $query->fetch()) { // Etape 3 : on parcours le résultat
		$listPersonne .= "<li>$line[0]</li>";
	}
	$listPersonne .="</ul>";
	echo $listPersonne;

}
?>

