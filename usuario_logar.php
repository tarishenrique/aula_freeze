<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    include './importacoes.php';
    ?>
</head>

<body>

    <!-- CABEÇALHO -->
    <?php include 'header.php' ?>


    <!-- CORPO -->
    <form name="formUsuario " action="index.php" method="post">
        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">
                    <h1>Acessar o sistema</h1>
                    <ol>
                        <li>
                            <input type="text" name="txtLogin" class="textbox" placeholder="Login" />
                        </li>

                        <li>
                            <input type="password" name="txtSenha" class="textbox" placeholder="Senha" />
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