<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>

    <form class="" action="#" method="post">
      <?php
      include_once "balise.php";

      input("text","login",array("value"=>"login"));
      input("text","passwd",array("value"=>"password"));
      input("submit","submit"array("value"=>"submit"));

      if(isset($_POST["login"])){ //création de remeber me du login
        input("hidden","keepLogin",array("value"=>"$_POST['login']"))
      }

       ?>
    </form>
  </body>
</html>
