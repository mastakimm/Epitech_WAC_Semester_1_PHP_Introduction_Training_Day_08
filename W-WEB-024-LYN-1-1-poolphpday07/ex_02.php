<?php

function my_facto_rec($nbr = null)
{
    if (!is_int($nbr) || $nbr < 0) {
        return null;
    }

    if ($nbr === 0) {
        return 1;
    } elseif ($nbr > 1) {
        return $nbr * my_facto_rec($nbr - 1);
    } else {
        return $nbr;
    }
}
