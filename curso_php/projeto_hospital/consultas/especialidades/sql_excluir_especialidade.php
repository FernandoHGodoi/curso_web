<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   
    
    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_cd_especialidade = $_POST['cd_especialidade'];  
    
    //PRIMEIRO PASSO PARA EXCLUIR DADOS
    $excluir_especialidade = "DELETE FROM hospital.ESPECIALIDADE WHERE cd_especialidade = '$var_cd_especialidade' ";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_excluir_especialidade = mysqli_query($conexao, $excluir_especialidade);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_excluir_especialidade){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro ao excluir a especialidade.';        
        header('Location: ../../especialidades.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Especialidade excluida com sucesso!';   
        header('Location: ../../especialidades.php');
    }



?>