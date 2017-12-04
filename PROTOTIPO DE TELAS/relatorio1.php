<?php
    include 'inc/funcoes.php';
    $array = selectCidadeEstado();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Cidades por estado:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $CidadeEstado) {
                    ?>
                    
                    <tr>
                        <td><?=$CidadeEstado["idcidade"]?></td>
                        <td><?=$CidadeEstado["nomecidade"]?></td>
                        <td><?=$CidadeEstado["nomeestado"]?></td>
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
