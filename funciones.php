<?php

#Funciones sin parámetros

function saludo(){

   echo "Hola<br><br>";

}

saludo();

#Funciones con parámetros

function despedida($adios){

    echo $adios."<br><br>";

}

despedida(Chao);


#Funciones con retorno

function retorno($retornar){

  return $retornar;

}

echo retorno("Yorluis Vega");



?>