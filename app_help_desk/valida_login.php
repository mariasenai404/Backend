<?php

session_start();

$usuario_autenticado = false;

//arrays e subarrays usadas
$usuario_cadastro = [
    [
        'email' => 'admin@senai.br',
        'senha' => '12345'
    ],
    [
        'email' => 'aluno@senai.br',
        'senha' => 'abcde'
    ],
    [
        'email' => 'suporte@senai.br',
        'senha' => '1a2b3c'
    ],
];

//verificação de booleano
foreach ($usuario_cadastro as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado == true){
    // echo "Usuario autenticado com sucesso";
    $_SESSION['autenticado'] = 'SIM';
    echo "Usuário autenticado com sucesso";
    header ('Location: painel.php');
}
else{
    // echo "Usuário ou senha incorreto";
    $_SESSION['autenticado'] = 'NÃO';
    header ('Location: index.php?login=erro');
}

?>
