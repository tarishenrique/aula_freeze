<!DOCTYPE html>
<html lang="pt-br">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "./importacoes.php" ?>
</head>

<body>

    <form method="post">

        <!-- CABEÇALHO -->
        <?php include 'header.php' ?>


        <!-- CORPO DO INDEX -->
        <div id="body" class="home">

            <!-- CORPO -->
            <div class="body">
                <div>
                    <div>
                        <h1>NOVO PRODUTO</h1>
                        <h2>Framboesa flambada com creme</h2>
                        <p>A combinação de framboesas flambadas com um delicioso sorvete de creme de baunilha é
                            simplesmente indescritível. </p>
                    </div>

                    <img src="images/yogurt.jpg" alt="" />
                </div>
            </div>

            <!-- RODAPÉ DO CORPO -->
            <div class="footer">
                <div>
                    <ul>
                        <li>
                            <a href="#" class="product"></a>
                            <h1>PRODUTOS</h1>
                        </li>
                        <li>
                            <a href="#" class="about"></a>
                            <h1>NOSSA HISTÓRIA</h1>
                        </li>
                        <li>
                            <a href="#" class="flavor"></a>
                            <h1>SABORES</h1>
                        </li>
                        <li>
                            <a href="#" class="contact"></a>
                            <h1>LOCALIZAÇÃO</h1>
                        </li>
                    </ul>
                </div>
            </div>

        </div>



        <!-- RODAPÉ -->
        <?php include 'footer.php' ?>

    </form>
</body>

</html>