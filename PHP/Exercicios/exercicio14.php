<?php

//Cria um array multidimencional com 3 subarrays
$usuario = [
    [   "id" => 1,
        "nome" => "João",
        "cidade" => "Salvador",
        "estado" => "BA"],

    [   "id" => 2,
        "nome" => "Maria",
        "cidade" => "Ubatuba",
        "estado" => "SP"],

    [   "id" => 3,
        "nome" => "Pedro",
        "cidade" => "Buzius",
        "estado" => "RJ"],

    [   "id" => 4,
        "nome" => "Enzo",
        "cidade" => "Balneario Camburiu",
        "estado" => "SC"],

    [   "id" => 5,
        "nome" => "Anna",
        "cidade" => "Campinas",
        "estado" => "SP"],
];

//Define a variavel $busca com o valor que deseja procurar no array
$busca = "Pedro";

//Exibe a estrutura don array $usuario de forma legível
echo '<pre>';
print_r($usuario);
echo '</pre>';

//Procuro o valor armazenado na variavel $busca no array multidimencional $usuario, especificamente np campo 'nome'
$indice = array_search ($busca, array_column($usuario, 'nome'));

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