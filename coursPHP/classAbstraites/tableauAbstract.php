<?php

abstract class TableauAbs {
	
	protected $ligne = "";
	protected $tableau = "";
	
 	public function FinLigne(){
		$this->tableau .= "<tr>".$this->ligne."</tr>";
		$this->ligne="";
	}
	
	public function Affiche(){
		return "<table border='1'>".$this->tableau."</table>";
	}
	
	
}

?>
