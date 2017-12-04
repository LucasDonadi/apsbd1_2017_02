<?php
    include 'inc/funcoes.php';
    $array = selectFuncionarioFisica();
?>

<html>
    <head>
        <title>RELATÓRIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Relatório de Pessoas Físicas-Funcionários:</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Nascimento</th>
                        <th>Função</th>
                        <th>Admissão</th>
                        <th>Salário</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($array as $FuncionarioFisica) {
                    ?>
                    
                    <tr>
                        <td><?=$FuncionarioFisica["idfuncionario"]?></td>
                        <td><?=$FuncionarioFisica["nome"]?></td>
                        <td><?=$FuncionarioFisica["rg"]?></td>
                        <td><?=$FuncionarioFisica["cpf"]?></td>
                        <td><?=$FuncionarioFisica["datanasc"]?></td>
                        <td><?=$FuncionarioFisica["funcao"]?></td>
                        <td><?=$FuncionarioFisica["admissao"]?></td>
                        <td><?=$FuncionarioFisica["salario"]?></td>
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
