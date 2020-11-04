<?php

require_once "db_connection.php";

if(isset($_POST['enviar'])){ 
     
$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$endereco= $_POST['logradouro'];
$pedido= $_POST['pedido'];

   $sql = "insert into pedidos (nome,email,telefone,endereco,pedido) values ('$nome','$email','$telefone','$endereco','$pedido')";
   mysqli_query($connect , $sql);

   echo $sql;

   header("Location: ../../forpedido.php");

} 
?>