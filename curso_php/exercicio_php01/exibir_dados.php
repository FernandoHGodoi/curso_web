<!--AQUI E HTML-->


<?php
//AQUI E PHP

//PARA COLETAR DADOS ENVIADOS PELO USUARIO VIA FORM
//UTILIZAMOS O $_POST
$var_nome = $_POST['frm_name'];
//echo 'Nome: ' . $var_nome;

$var_idade = $_POST['frm_idade'];
//echo '</br>' . $var_idade;

$var_sexo = $_POST['frm_sexo'];

   
?>



<div class="caixa_exibicao">

    <?php 
    
        echo 'Nome: ' . $var_nome;
        echo '</br>Idade: ' . $var_idade . ' anos';
        echo '</br>';
        
        if($var_sexo == 'M')
        {
            echo '<style>

            /*AQUI E CSS*/
            .caixa_exibicao
            {
                width: 400px;
                height: 200px;
                border: solid 3px blue;
            }';
        }else {
            echo 'Sexo: <style>

            /*AQUI E CSS*/
            .caixa_exibicao
            {
                width: 400px;
                height: 200px;
                border: solid 3px pink;
            }';
        }
     
    ?>

</div>