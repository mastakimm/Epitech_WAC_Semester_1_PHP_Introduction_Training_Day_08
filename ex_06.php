<?php

function str_to_wordtab($str = null, $delim = null)
{
    if (empty($str) || empty($delim)) {
        return null;
    }

    if (is_string($str) || is_string($delim)) {
        $result = explode($delim, $str);

        if (!$result) {
            return null;
        }
    }
}
