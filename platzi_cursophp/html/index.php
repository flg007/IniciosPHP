<?php


/* suma
$num1 = 3;
$num2 = 5;

$suma = $num1 * $num2;

echo "la multiplicacion de . " . "\n"  . " $num1 y $num2 es = $suma";
*/

$num = 2;
$num1 = 3;

echo "suma hasta el numero 10 del numero $num y $num1 \n";

for ($i = 1; $i <=10; $i++) {
    $resultado = $num + $i;
    echo "$num + $i es igual a $resultado\n";
}

echo "ahora la otra suma de $num1\n" ;

for ($i = 1; $i<=10; $i++) {
    $resultado = $num1 + $i;
    echo "la suma de $num1 + $i es igual a $resultado\n";
}