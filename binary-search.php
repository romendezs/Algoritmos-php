<?php
function binarySearch($arr, $x){
    $low =0;
    $high = count($arr) - 1;
    $mid = 0;

    while($low <= $high){
        $mid = floor(($low + $high) / 2);

        if($arr[$mid] == $x){
            return $mid;
        }

        if($arr[$mid] < $x){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }
    }

    return -1;
}

?>