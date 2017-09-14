<DOCTYPE! html>
<html>

<?php include "header.php"; ?>

<body>
  <?php  include "head.php"; ?>


  <div id="articles">
    <?php
    include "article.php";


    $fichierArticle = simplexml_load_file("article/chat.xml");


  $json = json_encode($fichierArticle);
  $array = json_decode($json,TRUE);

echo "<pre>".print_r($array)."</pre>"; die(1);
$article = "<div class='article'>";
    foreach ($array as $key=>$value) {
      if($key=="p") $article .= "<p>$value</p>";
      elseif ($key=="titre") $article .= "<h2>$value</h2>";
      elseif ($key=="chapeau") $article .= "<span class='chapeau'>$value</span>";
      elseif ($key=="img") {
        $article .="<img";
        foreach ($value as $key => $value) {
          if ($key=="name") $article .="alt='$value'";
          elseif ($key=="url") $article .="src='$value'";
        }
      }
      elseif ($key=="o") $article .= "$value";
      else $article .= "<p class='error'>ERROR index non reconue : $key</p>";
    }

     ?>
  </div>
</body>

</html>
