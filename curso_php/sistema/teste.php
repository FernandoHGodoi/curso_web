<?php

    //CHAMANDO CONEXAO.PHP
    include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisteminha</title>
</head>
<body>

    <?php

        //BUSCANDO DADOS DO CONVENIO
        $consulta_convenio = "SELECT * FROM 
                              hospital.convenio
                              WHERE cd_convenio = 3";

        //EXECUTANDO COMANDO NO BANCO
        $resultado = mysqli_query($conexao, $consulta_convenio);

        //APENAS PARA O COMANDO SELECT
        //CRIANDO ARRAY(TABELA) COM AS INFORMACOES DA CONSULTA
        $linha = mysqli_fetch_array($resultado);

        //EXIBINDO INFORMACOES
        echo $linha['cd_convenio'];
        echo ' | ' . $linha['nm_convenio'];
        echo ' | ' . $linha['cooparticipacao'];

    ?>

    


    
</body>
</html>