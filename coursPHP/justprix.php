<html>
<form  action="" method="post">
  <input type="text" name="nb">
  <?php
  if(isset($_POST["socket"])){
    print "<hidden name='secret' value='".$_POST["secret"].">";
  }
  else {
    $i = rand(1,101);
    print "<hidden name='secret' value='$i'>";
  }


   ?>
  <input type="submit">
</form>

<?php
if(isset($_POST)){
  if($_POST["nb"] < $price){
    echo "more";
  }
  elseif ($_POST["nb"] > $price) {
    echo "less";
  }
  else {
    echo "You win";
  }
}

 ?>
</html>
