<?php
  
  $host = "localhost:3306";
  $user = "root";
  $pass = "";
  $bd = "turismo_balsas";
  
  $mysqli = new mysqli($host,$user,$pass,$bd);

  //Verifica a conexão
  if($mysqli->connect_errno){
      echo "Falha na conexão". $mysqli->connect_error;
      exit();
  }

?>