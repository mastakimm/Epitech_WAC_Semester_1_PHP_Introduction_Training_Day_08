<?php

function get_next_prime($nbr)
{
    if (!is_int($nbr) || $nbr == null) {
        return null;
    }



    $i = 1;

    while (true) {
        if ($nbr == 2 || $nbr % $i == 0) {
            $i++;
        } else {
            if ($nbr <= $i) {
                return $i;
            }
        }
    }
}

var_dump(get_next_prime(10));
