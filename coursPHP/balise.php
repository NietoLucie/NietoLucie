<?php
function input($type, $name, $attributes = array()){
  $input = "<input type='$type' name='$name'";
  foreach ($attributes as $key => $value) {
    $input .= " $key='$value'";
  }
  $input .= ">";
  print $input;
}

function select($name, $tabValeur, $attributes){
  $select = "<select name='$anme'";
  foreach ($attributes as $key => $value) {
    $input .= " $key='$value'";
  }
  $select .= ">";
  foreach ($tabValeur as $key => $value) {
    $select .= "<option value='$key'>$value</option>";
  }
  $select .= "</select>";
}
 ?>
