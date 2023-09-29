<?php

function longestPalindrome($s)
{
    $n = strlen($s);
    $dp = array_fill(0, $n, array_fill(0, $n, false));
    $start = 0;
    $maxLength = 1;

    for ($i = 0; $i < $n; $i++) {
        $dp[$i][$i] = true;
    }

    for ($i = 0; $i < $n - 1; $i++) {
        if ($s[$i] === $s[$i + 1]) {
            $dp[$i][$i + 1] = true;
            $start = $i;
            $maxLength = 2;
        }
    }

    for ($k = 3; $k <= $n; $k++) {
        for ($i = 0; $i < $n - $k + 1; $i++) {
            $j = $i + $k - 1;

            if ($dp[$i + 1][$j - 1] && $s[$i] === $s[$j]) {
                $dp[$i][$j] = true;
                if ($k > $maxLength) {
                    $start = $i;
                    $maxLength = $k;
                }
            }
        }
    }

    return substr($s, $start, $maxLength);
}

$inputString = "babad";
$result = longestPalindrome($inputString);
echo "Longest palindromic substring: $result";
