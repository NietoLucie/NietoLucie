<?php

  include("simple_html_dom.php");


  $html = new simple_html_dom();
  $html->load_file('page.html');

  $col = $html->find(".col-lg-3");

  echo "<pre>";
  print_r($col);
  echo "</pre>";
 ?>
