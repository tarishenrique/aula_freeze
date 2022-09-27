<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./importacoes.php" ?>
</head>

<body>
    <?php
    include "./header.php";
    include "./conexao_bd.php";

    $descricao = $_POST["txtDescricao"];

    $sql = "INSERT INTO forma_pagamento (descricao) VALUES ('$descricao')";

    if (executarComando($sql)) {
        echo "<h1 class='alert alert-success'> Produto Cadastrado com sucesso </h1>";
    } else {
        echo "<h1 class='alert alert-danger'> Erro no cadastro </h1>";
    }




    include "./footer.php";
    ?>

</body>

</html>