<?php
    include 'inc/funcoes.php';
    $array = selectProdutoCategoria();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Produtos por Categorias:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>ID Produto</th>
                        <th>Nome</th>
                        <th>Lote</th>
                        <th>Valor de Venda</th>
                        <th>Estoque</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $ProdutoCategoria) {
                    ?>
                    
                    <tr>
                        <td><?=$ProdutoCategoria["idproduto"]?></td>
                        <td><?=$ProdutoCategoria["nomeproduto"]?></td>
                        <td><?=$ProdutoCategoria["lote"]?></td>
                        <td><?=$ProdutoCategoria["valorvenda"]?></td>
                        <td><?=$ProdutoCategoria["qtdestoque"]?></td>
                        <td><?=$ProdutoCategoria["nomecategoria"]?></td>
                   </tr>
                    <?php                   
                    }
                    ?>
                </tbody>
            </table>
        <form name="voltar" action="index.html" method="POST"><br>
            <input type="submit" value="Voltar"/>
        </form>
    </body>
</html>
