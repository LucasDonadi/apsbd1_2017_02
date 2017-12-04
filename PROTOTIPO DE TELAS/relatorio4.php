<?php
    include 'inc/funcoes.php';
    $array = selectJuridicaCliente();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Pessoas Jurídicas-Clientes:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>ID Cliente</th>
                        <th>CNPJ</th>
                        <th>Inscrição Estadual</th>
                        <th>Razão Social</th>
                        <th>Nome Fantasia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $JuridicaCliente) {
                    ?>
                    
                    <tr>
                        <td><?=$JuridicaCliente["idcliente"]?></td>
                        <td><?=$JuridicaCliente["cnpj"]?></td>
                        <td><?=$JuridicaCliente["inscrestad"]?></td>
                        <td><?=$JuridicaCliente["razaosocial"]?></td>
                        <td><?=$JuridicaCliente["nomefantasia"]?></td>
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
