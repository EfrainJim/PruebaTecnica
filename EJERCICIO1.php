<?php
// Variables y Constantes

// 1. Crea una variable de nomre "variable sin valor" declarada sin valor.
$variablesinvalor;

// 2. Crea dos variables con nombres booleano1 y booleano2 con valores booleanos.
$booleano1=true;
$booleano2=false;
//var_dump ($booleano2);

// 3. Crea una constante con el número PI.
define("N_Pi", 3.1416);
//echo N_Pi;

// 4. Crea una variable llamada tau con el valor de PI multiplicado por dos.
$tau=N_Pi*2;
//echo $tau;

// 5. Crea una constante de nombre "mi nombre" con tu nombre.
define("mi_nombre", "Efraín");
//echo mi_nombre;

// 6. Crea una constante de nombre "mi num fav" con valor numérico.
define("mi_num_fav", 8);
//echo mi_num_fav;




// Booleanos

// 7. Crear una variable cuya valor sea la comparación entre booleano1 and booleano2.
$comparacion=$booleano1 && $booleano2;
// var_dump ($comparacion);

// 8. Crea una variable cuyo valor sea la comparación booleana de no boleano1.
 $locontrariodebooleano1=(!$booleano1);
 //var_dump($locontrariodebooleano1);

// 9. Crea variable cuyo valor sea la compración booleana de (booleano1 or booleano2) and (booleano1 or (no booleano1 and no booleano2)).
$comparativabooleana=$booleano1 or $booleano2 && ($booleano1 or (!$booleano1 && !$booleano2));
// var_dump($comparativabooleana);

// 10. Crear variable cuyo valor sea la comparación booleano1 or booleano2.
$comparativa_or=$booleano1 or $booleano2;
// var_dump($comparativa_or);

// 11. Crear una variable cuyo valor sea la compración booleano (booleano1 and (tau/2 sea igual a PI) or (variableNumerica mayor o igual a miNumFav))
$variablenumerica=5;
$comparativabooleana2= $booleano1 && ($tau/2 == N_Pi) or $variablenumerica>=mi_num_fav;
// var_dump ($comparativabooleana2);

// 12. Crea una variable cuya valor sea la comparación booleana 6 no es estrictamente igual que 9.
$identicoa= 6===9;
//var_dump($identicoa);

// 13. Crear una variable cuyo valor sea la comparación booleana variableNumerica es positivo o menor que (miNumFav*tau).
$comparativa3=$variablenumerica>0 or $variablenumerica<(mi_num_fav*$tau);
//var_dump($comparativa3);






// Operadores

// 14. Crea una variable con valor 2, después súmale 5.
$variablenumero=2;
$variablenumero+5;

// 15. Crea una variable cuyo valor sea la resta de miNumFav y una variable de valor numérico.
$restaminumfav=mi_num_fav-$variablenumero;
// echo $restaminumfav

// 16. Crea una variable cuyo valor sea la suma de miNumFav y una variable de valor numérico.
$sumaminumfav=mi_num_fav+$variablenumero;
// echo $sumaminumfav;

// 17. Crea una variable cuyo valor sea la multiplicación de miNumFav y una variable de valor numérico.
$multipminumfav=mi_num_fav * $variablenumero;
// echo $multipminumfav;

// 18. Crea una variable cuyo valor sea la división de miNumFav y una variable de valor mumérico igual a 3.
$variableiguala3=3;
$divisionminumfav=mi_num_fav / $variableiguala3;
//echo $divisionminumfav;

// 19. Crea una variable cuyo valor sea el resto de la división de 143 dividido entre 140.
$resto= 143%140;
// echo $resto;

// 20. Crea una variable que cuyo valor sea el resto de la división de 25 entre 5.
$resto2=25%5;
//echo $resto2;

// Bucles

// 21. Crear variable contarHasta10_2 con valor 0 e incrementar su valor con un bucle for hasta que se verifique que contarHasta10_2 === 10.

for ($contarHasta10_2=0; $contarHasta10_2<=10; $contarHasta10_2++){
   // echo $contarHasta10_2; // (Lo comento para no liarme con los siguientes ejercicios)
}

// 22. Crear las variables postI y postJ con valor 0 a continuación crea un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de postI el valor de postJ++.
$postI=0;
$postJ=0;

for ($postJ;$postJ<=11;$postJ++){
// Echo $postJ;
    $postI = $postI+$postJ;
}
// echo $postI;

// 23. Crear la variable sumaPares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es par se deberá sumar a sumaPares el número de la iteración actual (i).
// NO SE HACERLO. SI ME DA TIEMPO HAGO PSEUDOCÓDIGO LUEGO CON ESTE.

// 24. Crear variable contarHasta10 con valor 0 e incrementar su valor con un bucle while hasta que se verifique que contarHasta10 === 10.
$contarHasta10=0;
while ($contarHasta10 < 10):
    $contarHasta10++;
   // echo $contarHasta10; 
endwhile;

// 25. Crear las variables preI y preJ con valor 0 a continuación cree un bucle que itere 11 veces. En cada iteración se deberá sumar al valor de preI el valor de ++preJ.
$preI=0;
$preJ=0;

for ($preJ;$preJ<=11;$preJ++){
// echo $preJ;
    $preI =+ $preI+$preJ;
}
 //echo $preI;
// 26. Crear la variable sumaImpares con valor 0 a continuación crea un bucle que itere 10 veces (i < 10) si la iteración es impar se deberá sumar a sumaImpares el número de la iteración actual (i).
// NO SE HACERLO. SI ME DA TIEMPO HAGO PSEUDOCÓDIGO LUEGO CON ESTE.

?>