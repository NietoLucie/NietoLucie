<?php
require('./tableauAbstract.php'); //import le fichier abstract
class Tableau1 extends TableauAbs { //déclare la class Tableau1 héritiere de TableauAbs

	public function Add($contenu){ //déclare une fonction add publique
		$this->ligne .= "<td>".$contenu."</td>";
	}

}

?>
