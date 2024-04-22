<?php

function return_calls()
{
    static $count = 0;
    $count++;

    if ($count % 2 === 0) {
        return $count;
    } else {
        return null;
    }
}
