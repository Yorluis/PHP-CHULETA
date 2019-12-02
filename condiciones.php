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
#Ciclo While

echo "<br><br>";

$n = 1;

while($n <= 5){

  echo $n;
  $n++;

}

#Ciclo Do While
echo "<br><br>";

$p = 1;

do{

  echo $p;
  $p++;
}

while($p <= 5);

#Ciclo For
echo "<br><br>";

for($i = 1; $i <= 5; $i++){

  echo $i;
}



?>