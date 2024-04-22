<?php

function which_is_longer($str1, $str2)
{
    if (!is_string($str1) || !is_string($str2)) {
        return -1;
    }

    if (strlen($str1) > strlen($str2)) {
        return strlen($str1);
    } else {
        return strlen($str2);
    }
}
