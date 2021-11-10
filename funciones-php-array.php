<?php
$data = [
    'Javier','Elmer','Camila'
];

$data2 = [
    'fruta' => 'Manzana',
    'Verdura' => 'Brocoli',
    'Condimento' => 'Ají molido'
];

// sort: Ordena un array.
sort($data2);
var_dump($data2);
echo '<br>';

// rsort: Ordena un array en orden inverso.
rsort($data2);
var_dump($data2);
echo '<br>';

// ksort: Ordena un array por clave.
ksort($data2);
var_dump($data2);
echo '<br>';

// krsort: Ordena un array por clave en orden inverso.
krsort($data2);
var_dump($data2);
echo '<br>';

// array_slice: Extrae una parte de un array.
var_dump(array_slice($data2,1));
var_dump($data2);
echo '<br>';

// array_chunk: Divide un array en fragmentos.
var_dump(array_chunk($data2,1));
var_dump($data2);
echo '<br>';

// array_shift: Quita un elemento del principio del array.
var_dump(array_shift($data2));
var_dump($data2);
echo '<br>';

// array_pop: Extrae el último elemento del final del array.
var_dump(array_pop($data2));
var_dump($data2);
echo '<br>';

// array_unshift: Añadir al inicio de un array uno a más elementos.
var_dump(array_unshift($data2,'Buenos Días'));
var_dump($data2);
echo '<br>';

// array_push: Inserta uno o más elementos al final de un array.
var_dump(array_push($data2,'Javier'));
var_dump($data2);
echo '<br>';

// array_flip: Intercambia todas las claves de un array con sus valores asociados.
var_dump(array_flip($data2));
var_dump($data2);
echo '<br>';