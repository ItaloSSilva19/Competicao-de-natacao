<?php

$listaCategorias = [];
$listaCategorias[0] = 'infantil';
$listaCategorias[1] = 'adolescente';
$listaCategorias[2] = 'adulto';

$nome = 'Pedro';
$idade = 17;


if($idade >= 6 && $idade <= 12){
    echo($listaCategorias[0]);
} elseif($idade > 12 && $idade <=18) {
    echo($listaCategorias[1]);
} elseif($idade > 18){
    echo($listaCategorias[2]);
} else {
    echo('Não possui idade adequada.');
}