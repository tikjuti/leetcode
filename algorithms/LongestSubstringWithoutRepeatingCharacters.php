<?php

function lengthOfLongestSubstring($s)
{
    $n = strlen($s);
    $maxLength = 0;
    $start = 0;
    $indexChar = [];

    for ($end = 0; $end < $n; $end++) {
        $currentChar  = $s[$end];
        if (array_key_exists($currentChar, $indexChar) && $indexChar[$currentChar] >= $start) {
            $start  = $indexChar[$currentChar] + 1;
        }
        $indexChar[$currentChar] = $end;
        $maxLength  = max($maxLength, $end -  $start + 1);
    }
    return $maxLength;
}

$s = "abcdbbc";
$result  = lengthOfLongestSubstring($s);
echo $result;
