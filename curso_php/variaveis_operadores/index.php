<?php

    //CRIANDO UMA VARIAVEL
    $nome = "Fernando";
    $sobrenome = "Henrique Godoi";
    $idade = 18;

    /*CONCATENANDO DUAS VARIAVEIS (USA-SE PONTO) 
    E GUARDANDO NA VARIAVEL NOME COMPLETO*/
    $nome_completo = $nome . ' ' . $sobrenome;

    //MOSTRANDO O VALOR DA VARIAVEL
    echo $nome_completo;

    /* SE IDADE FOR MAIR IGUAL A 18 A VARIAVEL RESULTADO_IDADE RECEBERA "MAIOR DE IDADE"
    SE IDADE FOR MENOR QUE 18 A VARIAVEL RECEBERA "MENOR DE IDADE" */
    if($idade >= 18){
        $resultado_idade = "Maior de idade!";
    }else{
        $resultado_idade = "Menor de idade";
    }

?>
<!--FIM PHP-->

<!--|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||-->

<!--INICIO HTML-->
<br>

<!--MOSTRANDO A VARIAVEL NOME_COMPLETO FORA DO PHP-->
<div style="width: 100px; heigth: 50px; background-color: red; color: white; padding: 5px; text-align: center;">

       <?php

            echo $nome_completo;

       ?>

</div>

<!--MOSTRANDO AVARIAVEL RESULTADO_IDADE FORA DO PHP-->
<div style="width: 100px; heigth: 50px; background-color: blue; color: white; padding: 5px; text-align: center;">

       <?php

            echo $resultado_idade;

       ?>

</div>
