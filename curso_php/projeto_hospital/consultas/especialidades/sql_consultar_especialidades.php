<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_especialidades = "SELECT cd_especialidade, nm_especialidade, sn_sus
                           FROM hospital.ESPECIALIDADE
                           ORDER BY cd_especialidade DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_especialidades = mysqli_query($conexao, $consulta_especialidades);
    //OBS a variavel $conexao é a mesma do conexao.php

?>