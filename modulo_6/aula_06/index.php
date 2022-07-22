<?php

$conteudo="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

// Serve para recortar uma string
echo substr($conteudo,0,5);

$nome = "Paulo Jose Terra Duque";

// Serve para separar uma string a partir de um delimitador - Retorna um array
$nomes = explode(' ',$nome);

print_r($nomes);

// Serve para juntar um array com um delimitador - Retorna uma String
$nomes = implode(' ', $nomes);

echo $nomes;

echo '<br>';
$novoConteudo = '<h1> Paulo Duque </h1>Outra Coisa';
echo $novoConteudo;
echo '<br>';

// Serve para retirar todo o código HTML
echo strip_tags($novoConteudo);
echo '<br>';

// Mostra todo o código HTML na página
echo htmlentities('<div></div>');



?>