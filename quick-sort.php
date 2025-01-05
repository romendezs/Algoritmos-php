<?php
    function partition(&$arr, $low, $high) {
        $pivot = $arr[$high];
        $i = $low - 1;

        for ($j = $low; $j < $high; $j++) {
            if ($arr[$j] < $pivot) {
                $i++;
                [$arr[$i], $arr[$j]] = [$arr[$j], $arr[$i]];
            }
        }

        [$arr[$i + 1], $arr[$high]] = [$arr[$high], $arr[$i + 1]];
        return $i + 1;
    }

    function quickSort(&$arr, $low, $high) {
        if ($low < $high) {
            $pi = partition($arr, $low, $high);

            quickSort($arr, $low, $pi - 1);
            quickSort($arr, $pi + 1, $high);
        }
    }

?>