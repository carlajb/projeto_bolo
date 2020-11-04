<?php

 $servidor  = "localhost";
 $usuario   = "root";
 $senha     = "";
 $banco     = "cake";

 $connect = mysqli_connect($servidor, $usuario, $senha, $banco);

if(mysqli_connect_error()) 
{
echo mysqli_connect_error();
}

?>