<?php

#Variable Numerica



$numero = 5;
echo "Esto es una variable Número: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Variable texto
$palabra = "palabra";
echo "Esto es una variable texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable Boleana
$boleana = true;
echo "Esto es una variable texto: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo", "amarillo");
echo "Esto es una variable arreglo: $colores[0]<br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con Propiedades
$verduras = array("verdura1"=>"Lechuga", "verdura2"=>"Cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

#Variable Objeto
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
echo "<br><br>";


?>
