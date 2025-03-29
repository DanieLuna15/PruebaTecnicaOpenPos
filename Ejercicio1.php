/*
 * Ejercicio 1 - PHP (Algoritmo de Lógica)
 *
 * Problema:
 * Escribe una función en PHP llamada buscarNumeroFaltante($numeros) que reciba un array con números consecutivos del 1 al 100,
 * pero con un número faltante. La función debe encontrar y retornar el número que falta.
 *
 * Ejemplo de uso:
 * $numeros = range(1, 100);
 * unset($numeros[array_rand($numeros)]); // Se elimina un número al azar
 * echo buscarNumeroFaltante($numeros);
 */

<?php
function buscarNumeroFaltante($numeros)
{
    $n = 100;
    $sumaCompleta = ($n * ($n + 1)) / 2;
    $sumaActual = array_sum($numeros);
    return $sumaCompleta - $sumaActual;
}

$numeros = range(1, 100);

$indiceEliminado = array_rand($numeros);
$numeroEliminado = $numeros[$indiceEliminado];
unset($numeros[$indiceEliminado]);

echo "Número que se eliminó aleatoriamente: " . $numeroEliminado . "\n";
echo "Número faltante encontrado: " . buscarNumeroFaltante($numeros);
?>