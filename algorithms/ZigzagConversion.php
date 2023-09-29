<?php

function convert($s, $numRows)
{
    if ($numRows <= 1) {
        return $s;
    }

    $result = array_fill(0, $numRows, '');
    $row = 0;
    $direction = -1;

    for ($i = 0; $i < strlen($s); $i++) {
        $result[$row] .= $s[$i];

        if ($row == 0 || $row == $numRows - 1) {
            $direction *= -1;
        }

        $row += $direction;
    }

    return implode('', $result);
}

$s = "PAYPALISHIRING";
$numRows = 3;
$result = convert($s, $numRows);
echo $result;
