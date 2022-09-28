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

    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTelefone"];
    $endereco = $_POST["txtEndereco"];
    $produto = $_POST["listaProduto"];
    $quantidade = $_POST["listaQuantidade"];
    $pagamento = $_POST["listaFormaPagamento"];


    $sql = "INSERT INTO encomenda (nome, telefone, endereco_entrega, produto, quantidade, pagamento) 
            VALUES ('$nome', '$telefone', '$endereco', '$produto', '$quantidade', '$pagamento')";


    if (executarComando($sql)) {
        echo "<h1 class='alert alert-success'> Encomenda cadastrada com sucesso </h1>";
    } else {
        echo "<h1 class='alert alert-danger'> Erro no cadastro </h1>";
    }




    include "./footer.php";
    ?>

</body>

</html>