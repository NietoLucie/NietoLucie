<?php
function AllArticle(){
  $tab = scanDirectory("article");
  foreach ($tab as $key => $value) {
    article($value);
  }
}

function article($name){
  echo file_get_contents("article/"."$name");
}

function scanDirectory($dir){
$tab = array();
if (is_dir($dir)) {
   if ($dh = opendir($dir)) {
       while (($file = readdir($dh)) !== false) {
           if( $file != '.' && $file != '..') {
           $tab[] = "$file";
           }
       }
       closedir($dh);
       return $tab;
   }
}
}
 ?>
