

<?php

 require_once "./php/actions/db_connection.php";

?>

<!--<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">navbar</a></nav>

  <button class="navbar-toggler" type="button" data-toggle="collapse"
  data-target="#collapsenavbar">
  <span class="navbar-toggler-icon"></span></button>

<div class ="collapse navbar-collapse" id="collapsenavbar">
  <ul class="nav">
    <li class="nav item"> 
    <a class = "nav-link text-white" href="#">peca online<a>
</li>

<li class="nav-item dropdown"> 
    <a class = "nav-link dropdown-toggle text-wite" href="#"
      id="navdrop_cardapio" data-toggle="dropdown">cardapio</a>
      <div class="dropdown-menu bg-primary">
        <a class ="dropdown-item" href="#">hhhhhhhhhhh</a>
</div>

</li>-->



<div class="p-3 mb-2 bg-warning text-dark">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page"><b>LISTA DE PRODUTOS</b></li>
  </ol>
</nav>
</div>-->

</body>

<div class="container-fluid">
  <div class="row"> 
        <div class="col-md-8 mx-auto">
        <table class="table table_responsive table-striped"> 

                <tr> 
                    <th> Codigo </th>
                    <th> Nome </th>
                    <th> Descricao </th>
                    <th> Preco </th>
                    <th> Imagem </th>
                </tr>

<?php

 $sql = "select cod_produto as cod_prod, nome_produto as nome_prod, 
 descricao, preco, nome_imagem as caminho_imagem from cake.tbl_produtos";
 
 $resultado = mysqli_query($connect,$sql);

 while($row = mysqli_fetch_assoc($resultado)) {
?>

                <tr> 
                    <td> <?php echo $row['cod_prod'] ?> </td>
                    <td> <?php echo $row['nome_prod'] ?> </td>
                    <td> <?php echo $row['descricao'] ?> </td>
                    <td> <?php echo $row['preco'] ?> </td>
                    <td> <img src="<?= $row['caminho_imagem']; ?>"/>  </td>
                </tr>
          
<?php

 }
     
?>
            </table>
        </div>    
  </div>    
</div>

<?php

  include_once ('paginas.html');

?>
