<?php

//Cria um array multidimencional com 3 subarrays
$usuario = [
    [   "id" => 1,
        "nome" => "João",
        "email" => "joao@example.com"],

    [   "id" => 2,
        "nome" => "Maria",
        "email" => "maria@example.com"],

    [   "id" => 3,
        "nome" => "Pedro",
        "email" => "pedro@example.com"],
];

//Define a variavel $busca com o valor que deseja procurar no array
$busca = "pedro@example.com";

//Exibe a estrutura don array $usuario de forma legível
echo '<pre>';
print_r($usuario);
echo '</pre>';

//Procuro o valor armazenado na variavel $busca no array multidimencional $usuario, especificamente np campo 'nome'
$indice = array_search ($busca, array_column($usuario, 'email'));

//Verifica se $indice n é igual a false
if($indice !== false){
    //Se o valor em $busca foi encontrado, exibe id do usuario correspondente
    echo "$busca foi encontrada com ID: ". $usuario[$indice]['id'];
}
else{
    //Se o valor em $busca não foi encontrado, exibe uma mensagem indicando isso
    echo "$busca não foi encontrada na lista de usuário.";
}

?>