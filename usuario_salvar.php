<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "./header.php";
    include "./conexao_bd.php";

    $login = $_POST["txtLogin"];
    $senha = $_POST["txtSenha"];

    $senha = md5($senha);

    $sql = "INSERT INTO usuario( login, senha) VALUES ('$login','$senha'";

    if (executarComando($sql)) {
        echo '<h1>Usuário adicionado</h1>';
    } else {
        echo '<h1>Não foi possível adicionar</h1>';
    }









    include "./footer.php";




    ?>


</body>

</html>