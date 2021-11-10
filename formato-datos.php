<?php
// $text = 'Hola mi nombre es JAVIER';
// echo strtolower($text) .'<br>';
// echo strtoupper($text).'<br>';

// // Primera letra en mayuscula
// echo lcfirst($text).'<br>';
// // Primera letra en minuscula
// echo ucfirst($text).'<br>';

// $text = 'Mi primer post';
// $slug = str_replace(' ','-',$text);
// echo strtolower($slug);

// $code = 45;
// echo str_pad($code, 10, '#', STR_PAD_BOTH) .'<br>';
// echo str_pad($code, 10, '#', STR_PAD_RIGHT).'<br>';
// echo str_pad($code, 10, '#', STR_PAD_LEFT).'<br>';

$text = 'Hola mundo, Ángel, año';
echo strtoupper($text) . '<br>';
echo mb_strtoupper($text); //Multibayte