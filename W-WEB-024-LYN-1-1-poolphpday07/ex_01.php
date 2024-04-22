<?php
function my_facto(int $nbr)
{
    if (!is_int($nbr) || $nbr < 0) {
        return NULL;
    }

    $result = 1;

    for ($i = 2; $i <= $nbr; $i++) {
        $result *= $i;
    }

    return $result;
}
