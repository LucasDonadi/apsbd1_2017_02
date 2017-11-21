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
        <form name="Categoria" action="inc/funcoes.php" method="POST" onsubmit="return validaCategoria()">
            <h3>Cadastro de Categoria</h3>
            Nome da Categoria:
            <input type="text" id="categoria" name="categ" size="25"/><br><br>
            Descrição da Categoria (máx. 200 caracteres):<br>
            <textarea cols="50" rows="4" maxlength="200" name="desc"></textarea><br><br>
            <input type="hidden" name="acao" value="inserirCategoria"/>
            <input type="submit" value="Cadastrar Categoria"/>
            <input type="reset" value="Limpar Dados"/>
        </form> 
        <script src="js/campo_obrigatorio.js"></script>
    </body>
</html>
			