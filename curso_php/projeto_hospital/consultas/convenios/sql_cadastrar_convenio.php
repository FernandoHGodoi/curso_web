<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_nm_convenio = $_POST['frm_nome_convenio'];    
    $var_coop = $_POST['frm_cooparticipacao'];

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_convenios = "INSERT INTO hospital.CONVENIO 
                            (nm_convenio,cooparticipacao)
                         VALUES 
                            ('$var_nm_convenio', '$var_coop')";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_convenio = mysqli_query($conexao, $insere_convenios);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_convenio){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro do convênio.';        
        header('Location: ../../convenios.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Convênio cadastrado com sucesso!';   
        header('Location: ../../convenios.php');
    }



?>