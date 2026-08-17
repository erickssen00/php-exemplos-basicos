<?php

// Declarando variaveis
$n1 = 20;
$n2 = 10; 
$multi = $n1 * $n2;
$desconto = 10;
$valorDesconto = ($multi / 100) * $desconto;
$precoFinal = $multi - $valorDesconto;

// Inicio das parada não sei definir esta poha fds
if($multi >= 200) {
    echo "O Preço é: $precoFinal";
} elseif ($multi < 200) {
    echo "O preço é: $multi";
}