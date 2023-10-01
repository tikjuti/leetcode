<?php

function isPalindrome($x)
{
    $str_x = strval($x);
    $reversed_str  = strrev($str_x);

    return $reversed_str === $str_x;
}
