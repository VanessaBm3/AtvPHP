<?php

$peso = 90;
$altura = 1.81;

function IMC($peso, $altura){
    $imc = $peso / pow($altura, 2);

    if($imc < 18.5){
        echo "Abaixo do peso";
    }
    else if($imc >= 18.5 && $imc >= 24.9){
        echo "Peso normal";
    }
    else if($imc >= 25 && $imc >= 29.9){
        echo "Sobrepeso";
    }
    else if($imc >= 30 && $imc >= 34.9){
        echo "Obesidade grau 1";
    }
    else if($imc >= 35 && $imc >= 39.9){
        echo "Obesidade grau 2";
    }
    else if($imc > 40){
        echo "Obesidade grau 3";
    }
}

echo IMC($peso, $altura);
?>