<?php
  define('HOST', 'localhost');
  define('USER', '');
  define('PASSWORD', '');
  define('DB', 'cadastro_php');

$connection = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possível conectar');

