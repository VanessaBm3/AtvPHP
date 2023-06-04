<?php

$soma = 0;
for($n = 10; $n <= 500; $n++){
    if($n%2 == 0){
        $soma += $n;
    }
  }

echo $soma;
?>