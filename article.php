<?php
function article($xml){
  /*
  le contenue est un tableau contenant le texte, les image et
  autre élément html/css du site
  l'index doit suivre la regle suivante :
    title => titre de l'article
    p => paragraphe
    img => image simple !! fournir l'url
    hat => chapeau de l'article
    o => other, pour les autre !! fournir code html/css complet
  */

/*  $article = "<div class='article'>";
  foreach ($contenue as $key => $value) {
    if($key=="p") $article .= "<p>$value</p>";
    elseif ($key=="title") $article .= "<h2>$value</h2>";
    elseif ($key=="hat") $article .= "<span class='chapeau'>$value</span>";
    elseif ($key=="img") $article .= "<img src='$value'>";
    elseif ($key=="o") $article .= "$value";
    else $article .= "<p class='error'>ERROR index non reconue : $key</p>";
  }
  $article .= "</div>";
  echo $article;*/
}



 ?>
