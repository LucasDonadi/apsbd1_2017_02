<?php
    include 'inc/funcoes.php';
    $array = selectEnderecoCidade();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Endereços por Cidade:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>Logradouro</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $EnderecoCidade) {
                    ?>
                    
                    <tr>
                        <td><?=$EnderecoCidade["logradouro"]?></td>
                        <td><?=$EnderecoCidade["bairro"]?></td>
                        <td><?=$EnderecoCidade["nomecidade"]?></td>
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
