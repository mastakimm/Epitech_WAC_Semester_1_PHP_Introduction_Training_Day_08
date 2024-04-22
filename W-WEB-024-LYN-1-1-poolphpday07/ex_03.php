<?php

function my_pow($nb_a = null, $nb_b = null)
{
    if (!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0) {
        return null;
    }

    if ($nb_b == 0) {
        return 1;
    }

    $result = $nb_a;

    for ($i = $nb_b; $i > 1; $i--) {
        $result *= $nb_a;
    }
    return $result;
}
