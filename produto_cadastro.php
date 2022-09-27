<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "./importacoes.php" ?>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'header.php' ?>

    <!-- CORPO -->
    <form name="formProduto" action="" method="post">
        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">
                    <h1>CADASTRAR PRODUTO</h1>

                    <ol>
                        <li>
                            <input type="text" name="txtDescricao" class="textbox" placeholder="Descrição do produto" />
                        </li>

                        <li>
                            <input type="submit" name="btSalvar" value="Enviar" class="botao" />
                        </li>


                    </ol>

                </div>
            </div>
        </div>
    </form>
    <!-- RODAPÉ -->
    <?php include 'footer.php' ?>
</body>

</html>