<form action="index.php" method="post">
    Informe o codigo do produto
    <input type="text" name="idProduto">
    <input type="submit" name="Enviar">
</form>

<?php

//Rafael Nogueira Matos
//RA: 16373
//2CTI

if(isset($_REQUEST["idProduto"])){
    $prod = $_REQUEST["idProduto"];
}
else
{
    echo "Falta código do produto!";
    exit();
}

$produtos = array
(
    "001" => "Cerveja Skol",
    "002" => "Cerveja Brahma",
    "003" => "Grarana Antarctica",
    "101" => "Arroz Tio Joao",
    "102" => "Feijao Broto Legal",
    "103" => "Farinha de trigo Renata"
);

if(!array_key_exists($prod, $produtos)){

    echo "Produto não cadastrado! ($prod)";
    exit();
}

$descricao = $produtos[$prod];

header("Location: detalhesProduto.php? idProduto=$prod & nomeProduto=$descricao");
?>