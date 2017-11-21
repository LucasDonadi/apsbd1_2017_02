<?php
    include 'inc/funcoes.php';
?>

<html>
    <head>
        <title>CADASTROS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name="Secao" action="inc/funcoes.php" method="POST" onsubmit="return validaSecao()">
            <h3>Cadastro de Seções</h3>
            Nome da Seção(Letra):
            <input type="text" id="secao" name="secaoproduto" size="25"/><br><br>
            <input type="hidden" name="acao" value="inserirSecao"/>
            <input type="submit" value="Cadastrar Seção"/>
            <input type="reset" value="Limpar Dados"/>
        </form>
        <script src="js/campo_obrigatorio.js"></script>
    </body>
</html>