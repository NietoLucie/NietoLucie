<html>
<?php
  $menue = array(
    "tp0 et 1"=>"tp2a.php",
    "formulaire"=>"formulaire.php",
    "just prix"=>"justprix.php"
  );

  $menueStr = "<ul><li><b>Liste des cours</b></li>";
  foreach ($menue as $part => $link) {
    $menueStr .= "<li><a href='$link'>$part</a></li>";
  }
  $menueStr .= "</ul>";
  echo $menueStr;

 ?>

</html>
