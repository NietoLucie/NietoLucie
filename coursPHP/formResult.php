<html>
<a href="formulaire.php">Retour au formulaire</a><br>
<?php
if($_GET["nb2"]>$_GET["nb1"]){
  for($i=0;$i<=$_GET["nb2"]-$_GET["nb1"];$i++){
    echo $_GET["nb1"]+$i."<br>";
  }
}
else {
  for($i=0;$i<=$_GET["nb1"]-$_GET["nb2"];$i++){
    echo $_GET["nb2"]+$i."<br>";
  }
}
 ?>

</html>
