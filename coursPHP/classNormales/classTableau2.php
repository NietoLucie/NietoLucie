<?php
class Tableau{
	private $ligne = "";
	private $tableau = "";
	
	public function Add(){
		$color = $this->HexaColor();
		$this->ligne .= "<td bgcolor='".$color."'>".$color."</td>";	
	}
	
	public function FinLigne(){
		$this->tableau .= "<tr>".$this->ligne."</tr>";
		$this->ligne="";
	}
	
	public function Affiche(){
		return "<table border='1'>".$this->tableau."</table>";
	}
	
	private function HexaColor(){
		$color="";
		for ($i=0;$i<3;$i++){
			$digitColor = dechex(rand(0, 255));
			$color .= str_pad($digitColor, 2, "0", STR_PAD_LEFT);
		}
		return $color;		
	}
}


$t = new Tableau();

for($i=0;$i<=10;$i++){
	for($j=0;$j<=10;$j++){
		$t->Add();
	}
	$t->FinLigne();
}
print $t->Affiche();

?>
