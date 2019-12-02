<?php

#CLASE:
#Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.

class Automovil{

     #PROPIEDADES:
     #Son las carcteristicas que puede tener un Objeto.

     public $marca;
     public $modelo;

    #Método
    #Es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer. La unica diferencia entre
    #método y funcion, es que llamamos metodo a las funciones de una clase (en la POO), mientras que llamamos funciones,
    #a los algoritmos de la programacion estructurada. 
    

    public function mostrar(){

      echo "<p>Hola! soy un $this->marca, model $this->modelo</p>";

    }

}

#Objeto
#Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accent Vision";
$b -> mostrar();

#Principios de la POO que se cumplen en este ejemplo:

#Abstracción: Nuevos tipos de datos (el que quieras, tu lo creas)
#Encapsulación: organizar el código en grupos lógicos
#ocultamiento: Ocultar detalles de implementación y exponer sólo los detalles que sean necesarios para el resto del sistema.


?>