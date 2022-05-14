<?php

    //CHAMA A PAGINA CONEXAO PARA CONECTAR O ENVIA_FORM COM O BANCO
    include_once("conexao.php"); 

    //CRIA VARIAVEIS PARA RECEBEREM OS DADOS DIGITADOS PELO USUARIO
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $endereco = $_POST['endereco'];
    $complemto = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];

    //UTILIZA-SE AS QUERIES PARA INSERIR DADOS NO BANCO VIA VARIAVEIS DO FORM
    $result = mysqli_query($conn, "INSERT INTO cadastro(email, senha, endereco, complemento, cidade, estado, cep) 
                                    VALUES('$email', '$senha', '$endereco', '$complemto', '$cidade', '$estado', '$cep')");

    //ENCERRA A CONEXAO COM O BANCO
    mysqli_close($conn);

    //A PÁGINA É ATUALIZADA
    header('location: form.php');

?>