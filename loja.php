<!doctype html>
<html lang= "pt-br">
   

<head>    
  <style>
  input, textarea {border:2px solid blue;}
  </style>   
  <meta charset="utf-8">
  <title> nossas lojas </title>
  <link rel="stylesheet" href="./aulas_curso_css/estilo.css">
</head>

<body 
  style="background-color: cadetblue;"> 
</body>


<body>
 <center>
  <h2 class="titulo">FAÇA SEU CADASTRO</h2>   
</center> 
<hr>
</body>


<body> 
<from>
<center><label for="pname"> NOME </label> </center>
<center> <input type = "text" id="pname" nome="nome_cliente"> </center><br>

<center><label for="num"> NUMERO DE TELEFONE</label></center>
<center><input type ="number" id="num" numero="num"> </center> <br>

<center> <label for="mail"> E-MAIL</label></center>
<center><input type = "email" id="mail"></center><br>

<center> <label for="addres"> ENDEREÇO</label><br></center>
<center><input type = "addres" id="endereco"></center><br> 


<center> <label for="msg"> MENSAGEM </label><br></center>
<center><textarea id= "msg"></textarea> </center><br>

<center> <input type= "submit" value="enviar"></center>
</from>
</body>




<?php
    
    include_once ('paginas.html')
    
    ?>
</html>
