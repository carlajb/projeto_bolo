<?php

  require_once "./php/actions/db_connection.php";

?>

<!doctype html>
<html lang= "pt-br">
    <head>
      <meta charset="utf-8">
      <title> contato - lojas de bolo </title>
      <link rel="stylesheet" href="./aulas_curso_css/estilo.css">
    </head>


   <body background= "imagens.html/bolos.jpg"></body> 
 

 
<body>
 <center>
<h2 class="titulo td2">CONTATO</h2>
</center>
  
    </b><th></th>
  
  </table>

<body>
  <center>
  <table> 
    <footer>
 <tr>
  <th> <b>CELULAR</b><th>
  <th><b>TELEFONE</b> </th>
  </tr>
        <tr>
        <td> <b>(11) 9090-9090</b><td>
        <td><b>(11) 5050-3030</b></td>
        </tr>
        <br>
        
        
 <tr>
<th> <b>email</b><th>
 <th><b>instagran</b></th>
 </tr>
      <tr>
      <td> <b>bolos.hotmail.com.br</b><td>
      <td><b> casadebolos@</b></td>
      </tr>
      <br>       
    </footer>
</table> </CENTER>
</BODY>

<br><br><br><br><br>

 <form method="post" action ="">
   nome: <br>
  <input type="text" name="nome" style="width:500px"><br>
  mensagem:<br>
  <input type="text" name="mensagem" style="width:500px"><br>
  <input type="button" name="sub" value="enviar"><br>
</form>
 
<?php
    
    include ('paginas.html')
    
    ?>