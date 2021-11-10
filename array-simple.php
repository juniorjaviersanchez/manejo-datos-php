<?php

// Array simple
// $courses = ['JavaScript','Java','PHP','Go'];
// var_dump($courses);

// Array complejo
// $data = [
//     'fruta' => 'Manzana',
//     'Verdura' => 'Brocoli',
//     'Condimento' => 'Ají molido'
// ];

// var_dump($data);
// foreach($data as $key => $value){
//     echo "$key - $value";
// }


// Array complejo
$datos = [
    'fruta' => 'Manzana',
    'Verdura' => 'Brocoli',
    'Condimento' => 'Ají molido'
];

function upper($data, $key){
    echo strtoupper($data).", ahora la llave $key<br>";
}

// Recorre todo el arreglo y además ejecuta la función upper
array_walk($datos,'upper');

var_dump( (bool)(array_key_exists('Verdura',$datos)));

var_dump(in_array('Manzana',$datos));

var_dump(array_values($datos));

var_dump(array_keys($datos));