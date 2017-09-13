<DOCTYPE! html>
<html>

<?php include "header.php"; ?>

<body>
  <?php  include "head.php"; ?>


  <div id="articles">
    <?php
    include "article.php";

      $article1 = [
        "title" => "article premier",
        "hat" => "ceci est le premier article de ce site",
        "img" => "http://www.vulgaris-medical.com/sites/default/files/styles/big-lightbox/public/field/image/actualites/2016/02/12/le-chat-source-de-bienfaits-pour-votre-sante.jpg",
        "p" => "Bonjour à tous, cecis est une photo de chat. C'est beau mais voilà, on s'en fout.
        le but est de produir un artcticle fake. Pour fournir tout ça.",
        "img" => "https://www.sciencesetavenir.fr/assets/img/2016/09/02/cover-r4x3w1000-57e16b966fe58-chat-qui-mange.jpg",
        "p" => "voilà un nouveaux chat qui va pour manger des croquette, bon bref, encore une fois
        on s'en fout, c'est juste pour le teste."
      ];

      article($article1);

     ?>
  </div>
</body>

</html>
