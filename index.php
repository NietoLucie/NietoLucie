<DOCTYPE! html>
<html>

<?php include "header.php"; ?>

<body>
  <?php  include "head.php"; ?>


  <div id="articles">
    <?php
    include "article.php";


    $fichierArticle = simplexml_load_file("article/chat.xml");

  echo "<pre>".print_r($fichierArticle)."</pre>";

  echo $fichierArticle->titre;

    foreach ($fichierArticle as $v) {
      echo "<h2>".$v->titre."</h2>";
    }

     ?>
  </div>
</body>

</html>
