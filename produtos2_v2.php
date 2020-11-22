

<?php

 require_once "./php/actions/db_connection.php";

?>

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


$dados_json = file_get_contents("http://localhost/projeto/projeto_bolo/getContent.php?table=cake.tbl_produtos");

$dados = json_decode($dados_json, true);

//print_r($dados);
foreach ($dados as $key => $row) {
  //print_r($row);
  //echo "<hr>";


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
