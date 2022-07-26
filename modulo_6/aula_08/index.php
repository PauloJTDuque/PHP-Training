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

echo '<br>';

$arr = ['<p>Paulo</p>', 'José','<h1>Terra Duque</h1>'];

print_r($arr);

echo '<br>';

// artay map serve para aplicar uma função em todos os valores do array
print_r(array_map('strip_tags',$arr));    //strip_tags => remove todo o código HTML


?>
