<?php

require('./classConcretTableau2.php'); 


$t = new Tableau2();

for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		$t->Add($i*$j);
	}
	$t->FinLigne();
}
print $t->Affiche();

?>
