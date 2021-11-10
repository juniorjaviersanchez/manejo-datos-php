<?php

// Valores
function saludar ($value){
    return "Hola $value";
}

echo saludar('Javier').'<br>';

// Referencias
$curso = 'PHP';
function path(&$curso){
    $curso = 'Laravel';
    echo $curso;
}

echo path($curso).'<br>';
echo $curso.'<br>';
// Predeterminado
function nombre($value = 'Javier'){
    return "Hola, $value";
}

echo nombre().'<br>';
echo nombre('Elmer').'<br>';


function greet(){
    return ['Hola','Como estás'];
}

// Para convertir de array a string
echo( implode(', ',greet()));