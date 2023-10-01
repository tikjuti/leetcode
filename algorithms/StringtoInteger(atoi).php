<?php

function myAtoi($s)
{
    $s = trim($s);
    $length = strlen($s);
    if ($length === 0) {
        return 0;
    }

    $sign = 1;
    $i = 0;

    if ($s[0] === '-' || $s[0] === '+') {
        $sign = ($s[0] === '-') ? -1 : 1;
        $i = 1;
    }

    $result = 0;
    $intMax = pow(2, 31) - 1;
    $intMin = -pow(2, 31);

    for (; $i < $length; $i++) {
        $char = $s[$i];
        if (!is_numeric($char)) {
            break;
        }
        if ($result > $intMax / 10 || ($result === $intMax / 10 && (int)$char > ($sign === 1 ? 7 : 8))) {
            return ($sign === 1) ? $intMax : $intMin;
        }

        $result = $result * 10 + (int)$char;
    }

    return min(max($result * $sign, $intMin), $intMax);
}

$s = "2147483648";
$output = myAtoi($s);
echo $output; // Output: 2147483647