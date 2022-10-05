<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        
        <form method="post" action="cadastro.php">
            <label>Nome</label> <br />
            <input type="text" name="txtNome" /><br />
            <label>Telefone</label><br />
            <input type="text" name="txtTelefone" /><br />
            <input type="submit" value="Cadastrar" />
        </form>
       <?php
        
        $nome = $_POST["txtNome"];
        $telefone = $_POST["txtTelefone"];
       
       if (isset($nome) && isset($telefone))
       {
        
        
        echo "<h1>Seus dados foram gravados</h1>";  
       }
        
        ?>
    </body>
</html>
