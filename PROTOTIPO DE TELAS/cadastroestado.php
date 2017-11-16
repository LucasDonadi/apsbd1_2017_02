<?php
    include 'inc/funcoes.php';
?>
<html>
    <head>
        <title>CADASTRO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name="Estado" action="inc/funcoes.php" method="POST" onsubmit="return validaEstado()">
            <h3>Cadastro de Estado</h3>
            UF:
            <input type="text" id="uf" name="uf" size="2" />
            Nome do Estado:
            <input type="text" id="nomeestado" name="nomeestado" size="25" /><br><br>
            <input type="hidden" name="acao" value="inserirEstado"/>
            <input type="submit" value="Cadastrar Estado"/>
            <input type="reset" value="Limpar Dados"/><br><br>
        </form>         
    </body>
    <script src="js/campo_obrigatorio.js"></script>
</html>

            