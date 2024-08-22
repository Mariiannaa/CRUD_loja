<?php 
    include "conexao.php";

    $produto = $_GET['produto'];
    $quantidade = $_GET['quantidade'];

    $insert = "INSERT INTO vendas (id, produto, quantidade) VALUES (NULL, '$produto', '$quantidade')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "Comprado com sucesso!";
    }else{
        echo "Erro ao comprar!";
    }













?>