<?php
//Declarei as variaveis
$cliente_vip =  'Sim';
$valor_compra = 700;
//Implementei as condicoes para o desconto
if( $cliente_vip == 'sim' or $valor_compra > 500){
    echo "Cleente COM desconto aplicado!";
}
else{
    echo "Cleente SEM desconto!";
}
?>