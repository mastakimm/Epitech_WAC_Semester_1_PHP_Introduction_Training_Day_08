<?php

function sum_it($nbr = null, $iteration = null)
{
    if (!is_int($nbr) || !is_int($iteration)) {
        return null;
    }

    $result = $nbr;
    $startI = abs($iteration);


    for ($i = $startI; $i > 0; $i--) {
        if ($iteration > 0) {
            $result += $i;
        } else {
            $result -= $i;
        }
    }

    return $result;
}
