<?php

function TowSum($nums, $target)
{
    $numTmp = [];
    for ($i = 0; $i < count($nums); $i++) {
        $complete = $target - $nums[$i];
        if (array_key_exists($complete, $numTmp)) {
            return [$numTmp[$complete], $i];
        }
        $numTmp[$nums[$i]] = $i;
    }
    return null;
}

$num = [2, 7, 11, 15];
$target  = 9;
$output = [0, 1];

if (array_values($output) == array_values(TowSum($num, $target))) {
    echo "Success";
} else {
    echo "Fail";
}
