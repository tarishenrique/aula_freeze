<!DOCTYPE html>
<html lang="pt-br">

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
    ?>

    <!-- CORPO -->
    <form name="formEncomenda " action="encomenda_salvar.php" method="post">

        <div id="body" class="contact">
            <div class="footer">
                <div class="contact">

                    <h1>ENCOMENDE SEU PRODUTO</h1>

                    <ol>
                        <li>
                            <input type="text" name="txtNome" required class="textbox" placeholder="Nome completo">
                        </li>

                        <li>
                            <input type="text" name="txtTelefone" required class="textbox"
                                placeholder="Telefone de contato" onkeyup="formataTelefone(this, event)"
                                MaxLength="15" />
                        </li>

                        <li>
                            <input type="text" name="txtEndereco" class="textbox" placeholder="Endereço de entrega" />
                        </li>

                        <li>
                            <select class="dropdown" name="listaProduto">
                                <?php
                                $sql = "SELECT * FROM produto ORDER BY descricao";

                                $resultado = retornarDados($sql);

                                while ($item = mysqli_fetch_assoc($resultado)) {
                                ?>
                                <option value="<?php $item["descricao"] ?>"><?php echo $item["descricao"] ?></option>
                                <?php } ?>
                            </select>
                        </li>

                        <li>
                            <select name="listaQuantidade" class="dropdown">
                                <option value="10">10 Unidades</option>
                                <option value="20">20 Unidades</option>
                                <option value="40">40 Unidades</option>
                                <option value="80">80 Unidades</option>
                                <option value="120">120 Unidades</option>
                                <option value="160">160 Unidades</option>
                                <option value="200">200 Unidades</option>
                                <option value="300">300 Unidades</option>
                                <option value="500">500 Unidades</option>
                            </select>
                        </li>
                        <li>

                            <!-- A LISTA DE FORMAS DE PAGAMENTO DEVEM VIR DO BANCO DE DADOS -->
                            <select name="listaFormaPagamento" class="dropdown">
                                <?php
                                $sql = "SELECT * FROM forma_pagamento ORDER BY descricao";

                                $resultado = retornarDados($sql);

                                while ($item = mysqli_fetch_assoc($resultado)) {
                                ?>
                                <option value="<?php $item["descricao"] ?>"><?php echo $item["descricao"] ?></option>
                                <?php } ?>

                            </select>

                        </li>
                        <li>
                            <input type="submit" name="btSalvar" value="Enviar" class="botao" />
                        </li>
                    </ol>



                </div>

            </div>
        </div>
    </form>


    <!-- RODAPE -->
    <?php
    include 'footer.php'
    ?>

</body>

</html>