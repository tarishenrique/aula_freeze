<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freeeze Sorvetes</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/estiloformularios.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <script src="js/mobile.js" type="text/javascript"></script>
    <script src="mascaras.js" type="text/javascript"></script>


    <!-- Bootstrap -->
    <link href="css_bootstrap/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js_bootstrap/bootstrap.min.js"></script>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'header.php' ?>


    <!-- CORPO -->
    <form name="formProduto " action="" method="post">
        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">
                    <h1>MOSTRAR PRODUTOS</h1>

                    <?php
                    include './conexao_bd.php';

                    $sql = "SELECT * FROM produto ORDER BY descricao";

                    $resultado = retornarDados($sql);
                    ?>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th> Descrição do Produto </th>
                            </tr>
                        </thead>

                        <?php
                        while ($linha = mysqli_fetch_assoc($resultado)) {

                        ?>
                        <tr>
                            <td> <?php echo $linha["descricao"]; ?> </td>
                        </tr>

                        <?php } ?>


                    </table>
                </div>

            </div>
        </div>

    </form>
    <!-- RODAPÉ -->
    <?php include 'footer.php' ?>
</body>

</html>