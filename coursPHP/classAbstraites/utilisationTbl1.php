<?php

require('./classConcretTableau1.php'); 


$t = new Tableau1();

for($i=1;$i<=10;$i++){
	for($j=1;$j<=10;$j++){
		$t->Add($i*$j);
	}
	$t->FinLigne();
}
print $t->Affiche();

?>
