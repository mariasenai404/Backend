<?php

$nome = 'Maria;'; //Variavel do tipo string - texto//
$escola = 'SESI Cerquilho;'; //Variavel do tipo string - texto//
$CE = 428;; //Variavel do tipo int - número inteiro//
$curso = 'Desenvolvimento de Sistemas;'; //Variavel do tipo string - texto//
$media = 9.5;; //Variavel do tipo float - números decimais//

echo 'Olá bem-vindo ao SESI SP';

echo "$nome <br>"; //Chamei a variavel dentro do echo para ela ser "printada" na pagina//
echo "$escola <br>"; //Chamei a variavel dentro do echo para ela ser "printada" na pagina//
echo "$CE <br>"; //Chamei a variavel dentro do echo para ela ser "printada" na pagina//
echo "$curso <br>"; //Chamei a variavel dentro do echo para ela ser "printada" na pagina//
echo "$media <br>"; //Chamei a variavel dentro do echo para ela ser "printada" na pagina//

echo "Olá $nome, bem vindo ao $escola $CE, sua nota no curso de $curso foi de $media.";

?>