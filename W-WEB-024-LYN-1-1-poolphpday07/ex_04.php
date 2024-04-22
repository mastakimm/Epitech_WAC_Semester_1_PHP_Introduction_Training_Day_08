<?php

function my_pow_rec($nbr = null, $power = null)
{
    if (!is_int($nbr) || !is_int($power) || $power < 0) {
        return null;
    }

    if ($power === 0) {
        return 1;
    }

    if ($power === 1) {
        return $nbr;
    }

    return $nbr * my_pow_rec($nbr, $power - 1);
}
