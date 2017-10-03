<?php
class Tableau{
	private $ligne="";
	private $tableau = "";
	
	public function Add($contenu){
		$this->ligne .= "<td>".$contenu."</td>";	
	}
	
	public function FinLigne(){
		$this->tableau .= "<tr>".$this->ligne."</tr>";
		$this->ligne="";
	}
	
	public function Affiche(){
		return "<table border='1'>".$this->tableau."</table>";
	}
}


$t = new Tableau();

for($i=1;$i<=10;$i++){
	for($j=1;$j<=10;$j++){
		$t->Add($i*$j);
	}
	$t->FinLigne();
}
print $t->Affiche();

?>
