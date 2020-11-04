
 
 <?php

$servidor  = "localhost";
$usuario   = "root";
$senha     = "";
$banco     = "cake";

$connect = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$connect){
    die("a conexao ao bd falhou".mysqli_connect_error()); 
}        
?>
<?php
if(isset($_POST['id'])&& isset($_POST['nome'])&&isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['endereco']) && isset($_POST['pedido'])){

$id = $_POST['id'];
$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
$endereco= $_POST['endereco'];


$sql="insert into pedidos (id,nome,email,telefone,endereco,pedido) values ('$id','$nome','$email','$telefone','$endereco')";

echo $sql;

$result= $connect->query($sql);
}
?>

 <!DOCTYPE html>
  <html>
  <head>
      <meta charset="UTF-8">
      <title>formulario de pedidos</title>
      
      <link rel="stylesheet" href="resources/css/bootstrap.min.css">


  </head>
  
  
      
  
<div class="p-3 mb-2 bg-warning text-dark">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page"><b>LISTA DE pedidos</b></li>
  </ol>
</nav>
</div>
              
              <div class="panel-body">
                  
                  <form method="POST" action="./php/actions/cadastrar_produtos.php" class="form-horizontal">
                      <fieldset>
                          
                          <div class="form-group">
                              
                              <label for="nome" class="col-sm-2 control-label">Nome</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control" id="nome" name="nome">
                              </div>
                             
                          </div>
                          
                          
                      
                      <fieldset>
                          <legend>Contato</legend>
                          <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-4">
                                  <input type="email" class="form-control" id="email" name="email">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label for="telefone" class="col-sm-2 control-label">Telefone</label>
                              <div class="col-sm-4">
                                  <input type="tel" class="form-control" id="telefone" name="telefone">
                              </div>
                          </div>
                      </fieldset>
                      
                      <fieldset>
                          <legend>Endereço</legend>
                          <div class="form-group">
                              <label for="logradouro" class="col-sm-2 control-label">Logradouro</label>
                              <div class="col-sm-4">
                                  <input type="text" class="form-control"  placeholder="digite seu nome" id="logradouro" name="logradouro">
                              </div>
                          </div>
                          
                          <div class="form-group">
                              <label for="uf" class="col-sm-2 control-label">escolha seu pedido</label>
                              <div class="col-sm-4"  >
                                  <select class="form-control"  name="pedido" id="pedido" name="pedido">
                                     <option value="pedido" placeholder="digite seu nome"></option>
                                      <option value="bolo_cenoura">BOLO DE CENOURA COM CHOCOLATE</option>
                                      <option value="bolo_limao">BOLO DE LIMAO</option>
                                      <option value="bolo_laranja">BOLO DE LARANJA COM CHOCOLATE</option>
                                      <option value="bolo_maracuja">BOLO DE MARACUJA</option>
                                      <option value="bolo_coco">BOLO DE COCO</option>
                                     
                                  </select>
                              </div>
                          </div>
                      </fieldset>
                      
                      <button type="submit" class="btn btn-primary" name ="enviar">
                          <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> ENVIAR...
                      </button>
                  </form>
              </div>
          </div>
      </div>
      
      <script src="resources/js/jquery.min.js"></script>
      <script src="resources/js/bootstrap.min.js"></script>
  </body>
  <?php
    
    include_once ('paginas.html')
    
    ?>
  </html>