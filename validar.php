<?php
function test_input($data) {
  $data = trim($data);//elimina espacios en blanco antes y después de la cadena.
  $data = stripslashes($data);//Devuelve un string con las barras invertidas retiradas.
  $data = htmlspecialchars($data);//Convierte caracteres especiales a entidades HTML
  return $data;
}