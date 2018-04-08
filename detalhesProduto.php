<?php

//Rafael Nogueira Matos
//RA: 16373
//2CTI

if(isset($_REQUEST["idProduto"]) && ($_REQUEST["nomeProduto"]))
{
    $prod = $_REQUEST["idProduto"];
    $descricao = $_REQUEST["nomeProduto"];
}
else
{
    echo "Faltam parametros";
    exit();
}

echo "<h1>Detalhes do produto</h1>";

echo $_REQUEST["idProduto"]," - ",$_REQUEST["nomeProduto"];
