<?php
function article($name){
  require_once "Parsedown.php";
  require_once "ParsedownExtra.php";
  require_once "ParsedownExtraPlugin.php";
  //require_once "markdown.php";

  $parsedown = new ParsedownExtraPlugin();
  $parsedown->code_class = 'lang-%s';
  $text = fopen("article/".$name.".txt", "r");
  echo $parsedown->text($text);




}



 ?>
