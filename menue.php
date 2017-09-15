<div id="mainMenue">

<?php
  $menue = array(
    "Présentation"=>"presentation.php",
    "Infographie3D"=>"3dCreation.php",
    "Facebook"=>"https://www.facebook.com/McAsulys/",
    "TP PHP"=>"coursPHP/index.php",
    "TP html css"=>"coursHTMLCSS/index.html"
  );

  $menueStr = "<ul>";
  foreach ($menue as $part => $link) {
    $menueStr .= "<li><a href='$link'>$part</a></li>";
  }
  $menueStr .= "</ul>";
  echo $menueStr;

 ?>

</div>
