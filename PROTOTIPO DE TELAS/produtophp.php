<?php
    include 'inc/funcoes.php';
    $array_produto = selectAllProduto();
?>

<html>
    <head>
        <title>PRODUTO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Lista de Produtos e Estoque</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Lote</th>
                        <th>Valor da Venda</th>
                        <th>Valor da Compra</th>
                        <th>Qtd. Estoque</th>
                        <th>Categoria</th>
                        <th>Seção</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($array_produto as $produto) { 
                    ?>
                    <tr>
                        <td><?=$produto["nomeproduto"]?></td>
                        <td><?=$produto["lote"]?></td>
                        <td><?=$produto["valorvenda"]?></td>
                        <td><?=$produto["valorcompra"]?></td>
                        <td><?=$produto["qtdestoque"]?></td>
                        <td><?=$produto["nomecategoria"]?></td>
                        <td><?=$produto["secaoproduto"]?></td>
                        <td>
                            <form name="alterar" action="altProduto.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?=$produto["idproduto"]?>"/>
                                <input type="submit" value="Editar" name="editar"/>
                            </form>
                        </td>
                        <td>
                            <form name="excluir" action="inc/funcoes.php" method="POST">
                                <input type="hidden" name="idproduto" value="<?=$produto["idproduto"]?>"/>
                                <input type="hidden" name="acao" value="excluirProduto"/>
                                <input type="submit" value="Excluir" name="excluir"/>
                            </form>
                        </td>
                    </tr>
                </tbody>
                    <?php
                        }
                    ?>
        </table>
        <form name="voltar" action="home.html" method="POST"><br>
            <input type="submit" value="Voltar"/>
        </form>
    </body>
</html>
