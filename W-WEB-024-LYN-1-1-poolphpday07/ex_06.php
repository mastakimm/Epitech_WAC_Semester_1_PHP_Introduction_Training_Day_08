<?php

function sum_rec($nbr = null, $iteration = null)
{
    if (!is_int($nbr) || !is_int($iteration)) {
        return null;
    }

    $absIteration = abs($iteration);

    if ($absIteration === 0) {
        return $nbr;
    }

    if ($iteration > 0) {
        return sum_rec($nbr + $iteration, $iteration - 1);
    } else {
        return sum_rec($nbr + $iteration, $iteration + 1);
    }
}
