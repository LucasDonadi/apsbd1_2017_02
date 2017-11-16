<?php
    include 'inc/funcoes.php';
    $banco = abrirBanco();
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/pessoa.css">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CADASTROS</title>
    </head>
    
    <body>
        <form id="pessoa" name="Pessoa" action="inc/funcoes.php" method="POST">
            <div>      
                <h3>Cadastro de Funcionário</h3>   
                Nome:
                <input type="text" name="nome" disabled="true" size="75" />
                RG:
                <input type="text" name="rg" disabled="true" size="20" />
                CPF:
                <input type="text" name="cpf" disabled="true" size="20" />
                Data de Nascimento:
                <input type="text" name="data_nasc" disabled="true" size="20" /><br><br>
                Rua:
                <input type="text" name="rua" disabled="true" size="75" />
                CEP:
                <input type="text" name="cep" disabled="true" size="20" />
                Bairro:
                <input type="text" name="bairro" disabled="true" size="20" /><br><br>
                Estado:
                <select name="estado" id="id_estado" disabled="true">
                    <option value="">Selecione o Estado</option>
                    <?php
                        $sql = "SELECT * FROM estado ORDER BY nomeestado";
                        $resultado_estado = $banco->query($sql);
                        while($row_estado = mysqli_fetch_assoc($resultado_estado)){
                            echo '<option value="'.$row_estado['idestado'].'">'.$row_estado['nomeestado'].'</option>';
                        }
                    ?>
                </select> 
                Cidade:
                <select name="cidade" id="id_cidade" disabled="true">
                    <option value="">Selecione a Cidade</option>
                </select>
                <h3>Contato</h3>          
                Telefone:
                <input type="text" name="telefone" disabled="true" size="20" />
                E-mail:
                <input type="text" name="email" disabled="true" size="30" /><br>
                <h3></h3>
                Função:
                <input type="text" name="funcao" disabled="true" size="50" />
                Data de Admissao:
                <input type="text" name="data_admsc" disabled="true" size="20" />
                Salário:
                <input type="text" name="salario" disabled="true" size="20" />
                Status:
                <input type="text" name="status" disabled="true" size="20" /><br><br>
                Login:
                <input type="text" name="login" disabled="true" size="25" />
                Senha:
                <input type="password" name="senha" disabled="true" size="25" /><br><br>
                <input type="submit" value="Cadastrar FUNCIONÁRIO"/>
                <input type="reset" value="Limpar Dados"/>
            </div>
        </form>
        <script src="js/radio.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/sub_cidade.js"></script>
        <script src="js/campo_obrigatorio.js"></script>
    </body>
</html>