<html>
<form  action="" method="post">
  <input type="text" name="nb">
  <?php

  if(isset($_POST["secret"])){
    print "<input type='hidden' name='secret' value='".$_POST["secret"]."'>";
    $nouv=$_POST["secret"];
  }
  else {
    $nouv = rand(1,100);
    print "<input type='hidden' name='secret' value='$nouv'>";
  }


   ?>
  <input type="submit">
</form>

<?php
print($nouv);

if(isset($_POST["nb"])){
  if($_POST["nb"] < $nouv){
    echo "more";
  }
  elseif ($_POST["nb"] > $nouv) {
    echo "less";
  }
  else {
    echo "You win";
    unset($_POST); //ne fonctionne pas comme je veux.
  }
}

 ?>
</html>
