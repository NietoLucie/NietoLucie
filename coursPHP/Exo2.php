<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Sondage : Vous et le WEB</title>
</head>
<body>
<?php
$os = array('Windows','Linux','OSX');
$browsers = array("Internet Explorer",'Firefox','Chrome','Opera','Safari');

  //print_r($_GET);

//Variable
  $boolBrowser = false;
  $boolOS = true;

  if (isset($_GET["email"]))
    $email = $_GET["email"];      //String
  if (isset($_GET["os"]))
    $getOs = $_GET["os"];         //Array
  if (isset($_GET["browser"]))
    $browser = $_GET['browser'];  //String
  if (isset($_GET["4G"]))
    if ($_GET["4G"]=="Non")
      $g = false;
    else
      $g = true;

//Teste
  foreach ($getOs as $key => $value) {
    if($value != "Windows" && $value != "Linux" && $value != "OSX"){
      $boolOS = false;
      print($value);
    }
  }

  foreach ($browsers as $key => $value) {
    if($value==$browser)
      $boolBrowser = true;
  }
//AFFICHAGE

  if($boolOS && $boolBrowser){
    echo "<p>Votre mail est : $email, vous travaillez sous ";
    for ($i=0;$i<count($getOs);$i++) {
      if($getOs[$i]==count($getOs)-1){
        echo "$getOs[$i] ";
      }
      else echo "$getOs[$i] et ";
    }
    echo "avec comme navigateur préféré ".$_GET['browser'];
    if($g)
      echo ". Vous avez un abonnement 4G.</p>";
    else
      echo ". Vous n'avez pas d'abonnement 4G.</p>";
  }


?>


<form action='#' method='GET'>

<fieldset>
<legend>Votre identité</legend>
<label for='mailId'>Votre mail</label>
<input type='email' name='email' placeholder="yourmail@gmail.com" required="required" />
<br />
</fieldset>
<label for='browserId'>

<br /><br />
<fieldset>
<legend>Questions</legend>
<label for='browserId'>Votre navigateur préféré</label><input list="browsers" name="browser" id='browserId' placeholder="IE, Firefox.." />
<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>

<br />
<label for='osId'>OS utilisés : </label>
Windows <input type='checkbox' name='os[]' value='Windows' />
Linux <input type='checkbox' name='os[]' value='Linux' />
OSX <input type='checkbox' name='os[]' value='OSX' />
<br />

Avez vous un forfait 4G : Oui <input type='radio' name='4G' value='Oui'/> Non <input type='radio' name='4G' value='Non' />
</fieldset>

<br />
<input type="submit" name='Valider' value='Valider'>


</form>




</body>
</html>
