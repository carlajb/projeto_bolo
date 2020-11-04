<?php

require_once "db_connection.php";

if(isset($_POST['entrar'])){ 
     $nome = $_POST['user'];
     $pwd = $_POST['pswd'];



  $sql = "select count(*) as valor_consulta from achei_aqui.tb_usuarios where nickname = '$nome' and senha = '$pwd'";
  $result= $connect-> query( $sql);
  
  while ($row = $result->fetch_assoc()) {

  $query_result = $row['valor_consulta'];


  if ($query_result == 1) {

    echo 'Login realizado com sucesso.';
   
    header("Refresh:4;../../index.php"); 

   } else {
    
    echo 'Senha ou usuário invalido.';

    header("Refresh:4;../Login.php");
   
   }

  //header("Location: ../login.php");

}
}


?>