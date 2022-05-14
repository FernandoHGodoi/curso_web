<?php

    $var_nome = $_POST['frm_nome'];

    $var_cpf = $_POST['frm_cpf'];
    
    $var_login = $_POST['frm_login'];

    $var_senha = $_POST['frm_senha'];
   
?>


<table>
    <!--PRIMEIRA LINHA TITULO TH-->
    <tr>
        <th>Nome</th><th>CPF</th><th>Login</th><th>Senha</th>
    </tr>
    <!--SEGUNDA LINHA TITULO TD-->
    <tr>
        <td><?php echo $var_nome; ?></td>
        <td><?php echo $var_cpf; ?></td>
        <td><?php echo $var_login ?></td>
        <td><?php echo $var_senha ?></td>
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