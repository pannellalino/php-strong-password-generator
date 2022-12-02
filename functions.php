<?php


function getPsw($psw_lenght){
  
  $arr = "1234567890abcdefghijklmnopqrstuvwxyz!?&%$<>^+-*/()[]{}@#_=";
  $password = '';
  
  for($i = 0; $i < $psw_lenght; $i++){
    $random = rand(0, strlen($arr));
    $password .= substr($arr, $random);
  }
  return $password;
}