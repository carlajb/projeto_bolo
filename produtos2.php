<?php

  require_once "./php/actions/db_connection.php";

?>
<div class="p-3 mb-2 bg-warning text-dark">
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page"><b>LISTA DE PRODUTOS</b></li>
  </ol>
</nav>
</div>


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
