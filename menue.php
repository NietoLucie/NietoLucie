<div id="mainMenue">

<?php
  $menue = array(
    "presentation"=>"presentation.php",
    "infographie3D"=>"3dCreation.php",
    "contact"=>"contact.php"
  );

  $menueStr = "<ul>";
  foreach ($menue as $part => $link) {
    $menueStr .= "<li><a href='$link'>$part</a></li>";
  }
  $menueStr .= "</ul>";
  echo $menueStr;

 ?>

</div>
