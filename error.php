<?php

// $f = @fopen("spoon.txt", "г");
// if (! $f) {
//     return;
// }

function myErrorHandler($errno, $msg, $file, $line)
{
    echo "Произошла ошибка с кодом $errno\n";
    echo "Файл: $file, строка $line.\n";
    echo "Текст ошибки: $msg";
}

set_error_handler("myErrorHandler", E_ALL);

$f = fopen("spoon.txt", "г");
