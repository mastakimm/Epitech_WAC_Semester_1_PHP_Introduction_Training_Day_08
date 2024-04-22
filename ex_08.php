<?php

function get_median($vals)
{
    sort($vals);
    $count = count($vals);

    if ($count % 2 === 0) {
        $milieu = ($count / 2);
        $middle = ($count / 2) - 1;
        $mediane = (($vals[$milieu] + $vals[$middle]) / 2);
        return $mediane;
    } else {
        $mid = floor($count / 2);
        return $vals[$mid];
    }
}
