<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_convenios = "SELECT cd_convenio, nm_convenio, cooparticipacao
                           FROM hospital.CONVENIO
                           ORDER BY cd_convenio DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_convenios = mysqli_query($conexao, $consulta_convenios);
    //OBS a variavel $conexao é a mesma do conexao.php

?>