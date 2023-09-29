<?php

function findMedianSortedArrays($nums1, $nums2)
{
    $arrayMerge  = array_merge($nums1, $nums2);
    sort($arrayMerge);

    $n = count($arrayMerge);
    if ($n % 2 == 0) {
        $mid1 = $n / 2;
        $mid2 = $mid1 - 1;
        return ($arrayMerge[$mid1] + $arrayMerge[$mid2]) / 2;
    } else {
        $mid =  floor($n / 2);
        return $arrayMerge[$mid];
    }
}
$nums1 = [1, 3];
$nums2 = [2, 5];

echo findMedianSortedArrays($nums1, $nums2);
