<?php

// $f = @fopen("spoon.txt", "г");
// if (! $f) {
//     return;
// }

function myErrorHandler($errno, $msg, $file, $line)
{
   // error_log("Помилка $errno, файл $file, рядок $line: $msg");
   error_log("Помилка $errno, файл $file, рядок $line: $msg", 3 , "tmp/my-errors.log");
    echo "Произошла ошибка с кодом $errno\n";
    echo "Файл: $file, строка $line.\n";
    echo "Текст ошибки: $msg";
}

set_error_handler("myErrorHandler", E_ALL);

$f = fopen("spoon.txt", "г");