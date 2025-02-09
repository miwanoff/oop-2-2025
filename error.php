<?php

// $f = @fopen("spoon.txt", "г");
// if (! $f) {
//     return;
// }

// function myErrorHandler($errno, $msg, $file, $line)
// {
//    // error_log("Помилка $errno, файл $file, рядок $line: $msg");
//    error_log("Помилка $errno, файл $file, рядок $line: $msg", 3 , "tmp/my-errors.log");
//     echo "Произошла ошибка с кодом $errno\n";
//     echo "Файл: $file, строка $line.\n";
//     echo "Текст ошибки: $msg";
// }

// set_error_handler("myErrorHandler", E_ALL);

// $f = fopen("spoon.txt", "г");

//Пользовательская функция-обработчик
function myErrorHandler($errno, $msg, $file, $line) {
    error_log("Помилка $errno, файл $file, рядок $line: $msg \n", 3 , "tmp/my-errors.log");
    // echo "Пользовательская ошибка с кодом $errno: $errstr\n";
    // echo "Ошибка в строке $errline в $errfile\n";
  }
  
  // Регистрация пользовательской функции-обработчика
  set_error_handler("myErrorHandler");
  

$age = -2;
if ($age < 0) {
    trigger_error("Помилка користувача! Вік від'ємний!", E_USER_ERROR);
}