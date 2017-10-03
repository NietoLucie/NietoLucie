<?php

require('./tableauAbstract.php');

class Tableau2 extends TableauAbs {

	public function Add(){
		$color = $this->HexaColor();
		$this->ligne .= "<td bgcolor='".$color."'>".$color."</td>";
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

?>
