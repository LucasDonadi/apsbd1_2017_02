<?php
    include 'inc/funcoes.php';
    
    $banco = abrirBanco();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/pessoa.css">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <title>CADASTROS</title>
    </head>
    
    <body>
        <form id="pessoa" name="Pessoa" action="inc/funcoes.php" method="POST"onsubmit="return validaPFisica()">
            <div>      
                <h3>Cadastro de Funcionário</h3>   
                Nome:
                <input type="text" name="nome" id="nome" value="" size="75" />
                RG:
                <input type="text" name="rg" size="20" />
                CPF:
                <input type="text" name="cpf" size="20" />
                Data de Nascimento:
                <input type="text" name="data_nasc" size="20" /><br><br>
                Rua:
                <input type="text" name="rua" size="75" />
                CEP:
                <input type="text" name="cep" size="20" />
                Bairro:
                <input type="text" name="bairro" size="20" /><br><br>
                Estado:
                <select name="estado" id="id_estado" >
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
                <select name="cidade_idcidade" id="id_cidade">
                <option value="">Selecione a Cidade</option>
                <?php
                    $sql = "SELECT * FROM cidade ORDER BY nomecidade";
                    $resultado_cidade = $banco->query($sql);
                    while($row_cidades = mysqli_fetch_assoc($resultado_cidade)){ 
                        echo '<option value="'.$row_cidades['idcidade'].'">'.$row_cidades['nomecidade'].'</option>';
                    }
                ?>
            </select><br><br> 
                <h3>Contato</h3>          
                Telefone:
                <input type="text" name="telefone" size="20" />
                E-mail:
                <input type="text" name="email" size="30" /><br>
                <h3></h3>
                Função:
                <input type="text" name="funcao" size="30" />
                Data de Admissao:
                <input type="text" name="data_admsc" size="20" />
                Salário:
                <input type="text" name="salario" size="20" />
                Status:
                <input type="text" name="status" size="20" /><br><br>
                Login:
                <input type="text" name="login" size="25" />
                Senha:
                <input type="password" name="senha" size="25" /><br><br>
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