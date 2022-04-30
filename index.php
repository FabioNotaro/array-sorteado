<?php

    $sorteados = [];
    $naoRepete = [];
    for($i = 0; $i < 20; $i ++){
        array_push($sorteados, rand(1,20));
    }
    $verify = array_count_values($sorteados);
    foreach($verify as $key => $value){
        if($value == 1){
            array_push($naoRepete, $key);
        }
    }
    echo "Array Sorteado = ".implode(", ", $sorteados)."</br>"; 
    echo " Os numeros que não se repetem são: ".implode(", ", $naoRepete);

?>