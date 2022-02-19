<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Especialidades </h10> </div>

Bem vindo a página de especialidades!
</br></br>

<!-- CHAMANDO ALERT COM A SESSAO SE A SESSAO ESTIVER ATIVA -->

<?php 

    //SE EXISTIR DADOS NA SESSAO msg_execucao
    if(isset($_SESSION['msg_execucao'])){

?>
            <!-- EXIBE A SESSAO NUM ALERT BOOTSTRAP -->
            <div class="alert alert-primary" role="alert">
                <?php echo $_SESSION['msg_execucao']; ?>    
            </div>

<?php 
    
            //DEPOIS DE EXIBIR A SESSAO, LIMPA ELA
            unset($_SESSION['msg_execucao']);

    }

?>

<!-- FORM PARA CADASTRAR ESPECIALIDADE -->

<form method="POST" action="consultas/especialidades/sql_cadastrar_especialidade.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nm_especialidade" placeholder="Nome" required>
        </div> 
        <div class="col-2">
            <input class="form-control" type="text" name="frm_sn_sus" placeholder="Possui SUS? (S/N)" required>
        </div>  
        <div class="col-1">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-plus"></i> </button>
        </div>      
    </div>
</form>

</br>

<table class="table table-striped table-hover">

  <!-- PRIMEIRA LINHA (TR) TITULO (TH) -->
  <tr>
      <th> Código </th>
      <th> Nome </th>
      <th> SUS (S/N) </th>
      <th> Ações </th>
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/especialidades/sql_consultar_especialidades.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_especialidades
        //COM TODOS OS DADOS DAS ESPECIALIDADES

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_especialidades = mysqli_fetch_assoc($resultado_especialidades)) {

    ?>
            <!--CONTEUDO-->
            <tr>
                <td> <?php echo $row_especialidades['cd_especialidade']; ?> </td>
                <td> <?php echo $row_especialidades['nm_especialidade']; ?> </td>
                <td> <?php echo $row_especialidades['sn_sus']; ?> </td>
                <td> <form method="POST" action="consultas/especialidades/sql_excluir_especialidade.php"> 
                        <input class="form-control" type="number" value="<?php echo $row_especialidades['cd_especialidade']; ?>" name="cd_especialidade" hidden>
                        <button class="btn btn-primary" type="submit"> <i class="fas fa-trash-alt"></i> </button>  
                    </form>
                </td>
                <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-pencil-alt"></i></button> </td>
            </tr>

   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>