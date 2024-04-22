<?php

function is_prime($nbr = null)
{
    if (!is_int($nbr)) {
        return null;
    }

    for ($i = 2; $i < $nbr; $i++) {
        if ($nbr % $i == 0) {
            return false;
        } else {
            return true;
        }
    }
    return null;
}
