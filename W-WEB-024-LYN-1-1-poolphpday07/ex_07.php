<?php

function str_to_wordtab($str = null, $delim = null)
{
    if (!is_string($str) || !is_string($delim)) {
        return null;
    }

    return explode($delim, $str);
}
