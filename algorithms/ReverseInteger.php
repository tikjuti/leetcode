<?php

function reverse($x)
{
    $str_x = strval($x);
    $reversed_str = strrev($str_x);

    if ($x < 0) {
        $reversed_str = '-' . substr($reversed_str, 0, -1);
    }

    $result =  intval($reversed_str);

    if ($result < pow(-2, 31) || $result > (pow(2, 31) - 1)) {
        return 0;
    }

    return $result;
}

$x = -123;
echo reverse($x);
