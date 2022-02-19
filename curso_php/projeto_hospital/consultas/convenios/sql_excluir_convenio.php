<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   
    
    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_cd_convenio = $_POST['cd_convenio'];  
    
    //PRIMEIRO PASSO PARA EXCLUIR DADOS
    $excluir_convenios = "DELETE FROM hospital.CONVENIO WHERE cd_convenio = '$var_cd_convenio' ";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_excluir_convenio = mysqli_query($conexao, $excluir_convenios);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_excluir_convenio){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro ao excluir o convênio.';        
        header('Location: ../../convenios.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Convênio excluido com sucesso!';   
        header('Location: ../../convenios.php');
    }



?>