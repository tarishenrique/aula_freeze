<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freeze Sorvetes</title>
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
    <form name="formEncomenda" action="relatorio_encomenda.php" method="post">
        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">
                    <h1>RELATÓRIO DE ENCOMENDAS</h1>

                    <ol>

                        <li>
                            Escolha o nome do produto para buscar as encomendas</li>

                        <li>
                        <li>

                            <select class="dropdown" name="listaProduto">
                                <?php
                                include './conexao_bd.php';

                                $sql = "SELECT * FROM produto ORDER BY descricao";
                                $resultado = retornarDados($sql);

                                while ($linha = mysqli_fetch_assoc($resultado)) { ?>



                                ?>
                                <option><?php echo $linha["descricao"]; ?></option>

                                <?php } ?>
                            </select>
                        </li>

                        <li>
                            <input type="submit" name="btBuscar" value="Buscar" class="botao" />
                        </li>
                    </ol>

                    <?php


                    if (isset($_POST["listaProduto"])) {

                        $descricao = $_POST["listaProduto"];

                        $sql = "SELECT * FROM encomenda WHERE produto = '$descricao'";

                        $resultado = retornarDados($sql);
                    ?>

                    <table class="table">
                        <tr>
                            <th>NOME</th>
                            <th>PRODUTO</th>
                            <th>QUANTIDADE</th>
                        </tr>

                        <?php
                            while ($linha = mysqli_fetch_assoc($resultado)) {
                            ?>

                        <tr>
                            <td><?php echo $linha["nome"] ?></td>
                            <td><?php echo $linha["produto"] ?></td>
                            <td><?php echo $linha["quantidade"] ?></td>
                        </tr>

                        <?php } ?>

                    </table>

                    <?php
                    } else {
                        echo "Selecione uma opção";
                    }

                    ?>

                </div>

            </div>
        </div>

    </form>
    <!-- RODAPÉ -->
    <?php include 'footer.php' ?>
</body>

</html>