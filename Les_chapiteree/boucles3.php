<?php 


for ($i = 0; $i <= 9; $i++) {
   echo "Nombre : $i <br>";

}


$j = 1 ;
while ($j <= 10) {
   echo "Itération : $j <br>";
   $j++;
}



$animaux = ["Chat", "Chien", "Lapin"];
foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}


for ($i = 1; $i <= 10; $i++) {
   if ($i == 5) continue;
   if ($i == 8) break;
   echo "Valeur : $i <br>";
}



for ($i = 2; $i <= 30; $i++) {
   if ($i == 5) continue;
   if ($i == 8) break;
   echo "Valeur : $i <br>";
}
