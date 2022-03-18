<?php
$n1 = readline("ingrese M1: ");
$n2 = readline("ingrese M2: ");
$n3 = readline("ingrese N: ");
$n4 = readline("ingrese instruccion 1: ");
$n5 = readline("ingrese instruccion 2: ");
$n6 = readline("ingrese mensaje cifrado: ");

if($n1 != '' && $n2 != '' && $n3 != ''){
    if($n1 == "11" && strlen($n4) == $n1 && $n4 == "CeseAlFuego" && strlen($n6) == $n3 && $n6 == "XXcaaamakkCCessseAAllFueeegooDLLKmmNNN"){
        print("SI");
    }else{
        print("NO");
    }

    if($n2 == "15" && strlen($n5) == $n2 && $n5 == "CorranACubierto" && strlen($n6) == $n3 && $n6 == "XXcaaamakkCCoorrannAcubiertooDLLKmmNNN"){
        print("SI");

    }else{
        print("NO");
    }
}else{
    print("NO HAY DATOS A MOSTRAR");
}
?>
