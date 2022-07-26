<?php
//Serve para unir 1 ou mais arrays
$array1 = array("cor" => "vermelho", 2, 4);
$array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
$result = array_merge($array1, $array2);
print_r($result);

echo '<br>';

$array1 = array("chave1" => "valor1", "chave2"=>"valor2");
$array2 = array("chave3" => "valor3", "chave4"=>"valor4");
$result = array_merge($array1, $array2);
print_r($result);

echo '<br>';

$array1 = array("chave1" => "valor1", "chave2"=>"valor2");
$array2 = array("chave3" => "valor3", "chave4"=>"valor4");
print_r(array_intersect_key($array1,$array2));
// Retorna nulo porque não há nenhuma chave em comum

echo '<br>';

$array1 = array("chave1" => "valor1", "chave2"=>"valor2");
$array2 = array("chave1"=>"ourto valor","chave3" => "valor3", "chave4"=>"valor4");
print_r(array_intersect_key($array1,$array2));
// Retorna chave1 uma vez que existe uma chave em comum



?>
