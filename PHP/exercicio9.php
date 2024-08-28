<?php
$raiz = 0;
$raiz2 = 0;
for($i = 1; $i <= 50; $i++){
    $raiz = sqrt($i);
    $raiz2 = round($raiz, 2);
    echo "As raizes de $i: $raiz2 </br>";
}
?>