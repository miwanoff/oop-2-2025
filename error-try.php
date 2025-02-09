<?php
// function reciprocal($x)
// {
//     if ($x == 0) {
//         throw new Exception();
//     }
//     return 1 / $x;
// }

// try {
//     $x = 5;
//     $y = reciprocal($x);
//     echo $y;
// } catch (Exception $ex) {
//     echo "Error!"; //Error!
// }

// echo "Начало программы.\n";
// try {
//     echo "Начало try-блока.\n";
//     outer();
//     echo "Конец try-блока.\n";
// } catch (Exception $e) {
//     echo "Исключение: {$e->getMessage()}\n";
//     echo "Конец программы.\n";
// } finally {
//     echo "finally.\n";
// }

// function outer()
// {
//     echo "Вошли в функцию " . __METHOD__ . "\n";
//     inner();
//     echo "Вышли из функции " . __METHOD__ . "\n";
// }

// function inner()
// {
//     echo "Вошли в функцию " . __METHOD__ . "\n";
//     throw new Exception ( "Hello!" );
//     echo "Вышли из функции " . __METHOD__ . "\n";
// }

// Пользовательская функция-обработчик
function myErrorHandler($errno, $msg, $errfile, $errline)
{
    // echo "Пользовательская ошибка с кодом $errno: $msg\n";
    // echo "Ошибка в строке $errline в $errfile\n";
    throw new ErrorException($msg, $errno, 0, $errfile, $errline);
}
// Регистрация пользовательской функции-обработчика
set_error_handler("myErrorHandler", E_ALL);

try {
    $f = fopen("spoon.txt", "г");
} catch (ErrorException $e) {
    echo "Error $e";
    error_log("Errors!" . $e, 3 , "tmp/my-errors.log");
    //error_log("Помилка $errno, файл $file, рядок $line: $msg \n", 3 , "tmp/my-errors.log");
}