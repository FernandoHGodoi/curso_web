<?php
    //DECLARANDO VARIAVEIS
    $qtd_repeticoes = 10;
    $contador = 1;

    //EXIBE-SE A VARIAVEL QUANTIDADE DE REPETICOES
    echo 'QUANTIDADE DE REPETICOES: ' . $qtd_repeticoes;

    //EXIBE-SE A VARIAVEL CONTADOR QUE INICIA-SE DO 1
    echo '</br></br> CONTADOR INICIA DO: ' . $contador . '</br></br>';

    /* CRIADO LACO DE REPETICAO, ENQUANTO CONTADOR 
    FOR MENOR IGUAL A QUANTIDADE SE REPETE */
    while($contador <= $qtd_repeticoes)
    {
        //EXIBE-SE O VALOR DO CONTADOR A CADA REPETICAO
        echo 'REPETICAO: ' . $contador;

            //SE O RESTO DA DIVISAO DO $contador FOR IGUAL A 0  
            if($contador % 2 == 0)
            {
                echo ' PAR </br>';
            }else 
            {
                echo ' IMPAR </br>';
            }

        /*ADICIONA-SE 1 A VARIAVEL CONTADOR INCREMENTANDO 
        O VALOR ATE CHEGAR NO LIMITE DE 10 */
        //OU APENAS: $contador++;
        $contador = $contador + 1;
    }

    echo '</BR>EXEMPLO DE FOR</br></br>';
    
    //EXEMPLO DE FOR PARA O MESMO EXEMPLO
    for($contador = 1; $contador <= 10; $contador++)
    {
        echo 'REPETICAO: ' . $contador . '</br>';
    }
?>
<!--CTRL H FACILITA A MUDANCA DOS NOMES DAS VARIAVEIS-->