<?php
// arreglo de 1 dimension
/*$precios=array(1600,4600,1000);
print_r($precios);
echo("<br>"),
echo($precios[0]);

echo("<br>");
foreach($precios as $valores);
echo($valores);
echo("<br>")
*/


//arreglo de varias dimensiones
$productos=array(
"producto1"=>array("arroz",1600,"caribe"),
"producto"=>array("aceite",5600,"premier"),
"producto3"=>array("sal",1000,"refisal")

);

print_r($productos),
echo("<br>"),
echo($productos[0][0]);

//recorrido
foreach($productos as $valores)
{
    echo($valores[0]);
    echo("<br>");
}





?>