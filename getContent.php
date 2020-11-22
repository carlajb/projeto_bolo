<?php

require_once "./php/actions/db_connection.php";

$tabela = $_GET['table'];

$sql = "select cod_produto as cod_prod, nome_produto as nome_prod, 
descricao, preco, nome_imagem as caminho_imagem from $tabela";

$resultado = mysqli_query($connect,$sql);

print_r (json_encode($resultado->fetch_all(MYSQLI_ASSOC)));

?>