<?php 

$greet = function($name){  //Valor que requiere lógica
    return "Hola $name";
};

echo $greet('Javier');


function handleResponse(Closure $type, $message) {
    return $type($message);
  }
  
  $success = function ($message) {
    return [
      'status' => 200,
      'message' => $message
    ];
  };
  
  $fail = function ($message) {
    return [
      'status' => 400,
      'message' => $message
    ];
  };
  
  echo "<pre>";
  var_dump(handleResponse($success, 'El request fue exitoso'));
  var_dump(handleResponse($fail, 'Bad Request'));