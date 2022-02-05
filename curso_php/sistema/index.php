<?php

    //CHAMANDO CONEXAO
    include 'conexao.php';

    //COLETANDO AS INFORMACOES DO POST
    //@ PARA IGNORAR ERRO CASO O POST NAO SEJA ENVIADO
    @$cd_convenio = $_POST['frm_cd_convenio'];

?>

<form method="POST" action="index.php">

    Código do convênio: <br>
    <input type="number" name="frm_cd_convenio">

    <button type="submit"> Enviar</button>

</form>

<?php 

    echo 'Convenio selecionado: ' . $cd_convenio . '<br><br>';

    //BUSCANDO DADOS DO CONVENIO
    $consulta_convenio = "SELECT * FROM 
    banco_iep.convenio
    WHERE cd_convenio = $cd_convenio";

    //EXECUTANDO COMANDO NO BANCO
    $resultado = mysqli_query($conexao, $consulta_convenio);

    //APENAS PARA O COMANDO SELECT
    //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
    $linha = mysqli_fetch_array($resultado);

    //EXIBINDO INFORMACOES
    //echo $linha['cd_convenio'];
    //echo ' | ' . $linha['nm_convenio'];
    //echo ' | ' . $linha['cooparticipacao'];

?>


<table>
    <!--PRIMEIRA LINHA TITULO TH-->
    <tr>
        <th>Código</th><th>Nome</th><th>Cooparticipacao (%)</th>
    </tr>
    <!--SEGUNDA LINHA TITULO TD-->
    <tr>
        <td><?php echo $linha['cd_convenio']; ?></td>
        <td><?php echo $linha['nm_convenio']; ?></td>
        <td><?php echo $linha['cooparticipacao']; ?></td>
    </tr>
</table>

<style>

    table{
        border-spacing: 5px;
    }

    th{
        border: solid 1px black;
        text-align: center;
        background-color: lightblue;
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
        <td><?php echo $linha['nm_convenio']; ?></td>
    </tr>
</table>


