<?php

#Condiciones
$a = 5;
$b = 10;

if($a > $b){

    echo "a es mayor que b";

}

#Y Tambien
else if($a == $b){

    echo "a es igual que b";

}

#Si no

else {

    echo "a es menor que b";

}

echo "<br><br>";

#Suiches
$dia = "sabado";

switch($dia){

    case 'sabado':
      echo "Voy a estudiar php";
    break;

    case 'viernes':
      echo "voy a la fiesta";
    break;

    case 'domingo':
      echo "voy a descansar";
    break;

    default: echo "Voy a la Universidad";


}


?>