<?php

//exercicio de condicional swithc, com case e break
$corEscolhida = "vermelho";
switch ($corEscolhida) {
    case "vermelho":
        echo "Voce escolheu a cor vermelha.";
        break;

    case "azul":
        echo "Voce escolheu a cor azul.";
        break;

    case "verde":
        echo "Voce escolheu a acor verde.";
        break;

    default:
        echo "Cor nao disponivel.";
        break;
}

?>