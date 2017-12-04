<?php
    include 'inc/funcoes.php';
    $array = selectProdutoLocalProduto();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Produtos por Seções:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>ID Produto</th>
                        <th>Nome</th>
                        <th>Lote</th>
                        <th>Valor de Venda</th>
                        <th>Estoque</th>
                        <th>Seção</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $ProdutoLocalProduto) {
                    ?>
                    
                    <tr>
                        <td><?=$ProdutoLocalProduto["idproduto"]?></td>
                        <td><?=$ProdutoLocalProduto["nomeproduto"]?></td>
                        <td><?=$ProdutoLocalProduto["lote"]?></td>
                        <td><?=$ProdutoLocalProduto["valorvenda"]?></td>
                        <td><?=$ProdutoLocalProduto["qtdestoque"]?></td>
                        <td><?=$ProdutoLocalProduto["secaoproduto"]?></td>
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
