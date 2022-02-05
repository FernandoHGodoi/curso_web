<?php

    //CHAMANDO CONEXAO
    include 'conexao.php';

    //COLETANDO AS INFORMACOES DO POST
    //@ PARA IGNORAR ERRO CASO O POST NAO SEJA ENVIADO
    @$cd_paciente = $_POST['frm_cd_paciente'];

?>

<form method="POST" action="visualizar_paciente.php">

    Código do paciente: <br>
    <input type="number" name="frm_cd_paciente">

    <button type="submit"> Enviar</button>

</form>

<?php 

    echo 'Paciente selecionado: ' . $cd_paciente . '<br><br>';

    //BUSCANDO DADOS DO PACIENTE
    $consulta_paciente = "SELECT * FROM 
    banco_iep.paciente
    WHERE cd_paciente = $cd_paciente";

    //EXECUTANDO COMANDO NO BANCO
    $resultado = mysqli_query($conexao, $consulta_paciente);

    //APENAS PARA O COMANDO SELECT
    //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
    $linha = mysqli_fetch_array($resultado);

    //EXIBINDO INFORMACOES
    //echo $linha['cd_paciente'];
    //echo ' | ' . $linha['nm_paciente'];
    //echo ' | ' . $linha['sexo'];

    if($linha['sexo'] == "M")
    {
        $sexo = 'Masculino';
    }
    else {
        $sexo = 'Feminino';
    }

?>

<table>
    <!--PRIMEIRA LINHA TITULO TH-->
    <tr>
        <th>Código</th><th>Nome</th><th>Sexo</th>
    </tr>
    <!--SEGUNDA LINHA TITULO TD-->
    <tr>
        <td><?php echo $linha['cd_paciente']; ?></td>
        <td><?php echo $linha['nm_paciente']; ?></td>
        <td><?php echo $sexo ?></td>
    </tr>
</table>

<style>

    table{
        border-spacing: 5px;
    }

    th{
        border: solid 1px black;
        text-align: center;
        background-color: lightgreen;
        padding: 5px;
    }

    td{
        border: solid 1px black;
        text-align: center;
        padding: 5px;
    }

</style>


<table>
    <tr>
        <th>titulo 01</th>
        <th>titulo 02</th>
    </tr>
    <tr>
        <td>CONTEUDO 01</td>
        <td><?php echo $linha['nm_paciente']; ?></td>
    </tr>
</table>