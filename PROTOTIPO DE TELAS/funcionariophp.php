<?php
    include 'inc/funcoes.php';
    $array_pessoa = selectAllPJuridica();
?>

<html>
    <head>
        <title>PESSOA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>Lista de Funcionários</h3>
        <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Função</th>
                        <th>Status</th>
                        <th>RG</th>
                        <th>CPF</th>
                        <th>Admissão</th>
                        <th>Data de Nascimento</th>
                        <th>Salário</th>
                        <th>Telefone</th>
                        <th>E-Mail</th>
                        <th>Rua</th>
                        <th>CEP</th>
                        <th>Bairro</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Cidade</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($array_pessoa as $PFisica) { 
                    ?>
                    <tr>
                        <td><?=$PFisica["nome"]?></td>
                        <td><?=$$PFisica["função"]?></td>
                        <td><?=$$PFisica["rg"]?></td>
                        <td><?=$$PFisica["cpf"]?></td>
                        <td><?=$$PFisica["admissão"]?></td>
                        <td><?=$$PFisica["dtnasc"]?></td>
                        <td><?=$$PFisica["salário"]?></td>
                        <td><?=$$PFisica["telefone"]?></td>
                        <td><?=$$PFisica["email"]?></td>
                        <td><?=$$PFisica["rua"]?></td>
                        <td><?=$$PFisica["cep"]?></td>
                        <td><?=$$PFisica["bairro"]?></td>
                        <td><?=$$PFisica["número"]?></td>
                        <td><?=$$PFisica["complemento"]?></td>
                        <td><?=$$PFisica["cidade"]?></td>
                        <td>
                            <form name="alterar" action="altPFisica.php" method="POST">
                                <input type="hidden" name="idpessoa" value="<?=$$PFisica["idpessoa"]?>"/>
                                <input type="submit" value="Editar" name="editar"/>
                            </form>
                        </td>
                        <td>
                            <form name="excluir" action="inc/funcoes.php" method="POST">
                                <input type="hidden" name="idpessoa" value="<?=$$PFisica["idpessoa"]?>"/>
                                <input type="hidden" name="acao" value="excluirPFisica"/>
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
