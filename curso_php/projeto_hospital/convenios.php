<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Convênios </h10> </div>

Bem vindo a página de convênios!
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

<!-- FORM PARA CADASTRAR CONVENIO -->

<form method="POST" action="consultas/convenios/sql_cadastrar_convenio.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_convenio" placeholder="Nome" required>
        </div> 
        <div class="col-2">
            <input class="form-control" type="number" name="frm_cooparticipacao" placeholder="Cooparticipação" required>
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
      <th> Cooparticipação </th>
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/convenios/sql_consultar_convenios.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_convenios
        //COM TODOS OS DADOS DOS CONVENIOS

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_convenios = mysqli_fetch_assoc($resultado_convenios)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_convenios['cd_convenio']; ?> </td>
              <td> <?php echo $row_convenios['nm_convenio']; ?> </td>
              <td> <?php echo $row_convenios['cooparticipacao']; ?> </td>  
            </tr>

   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>