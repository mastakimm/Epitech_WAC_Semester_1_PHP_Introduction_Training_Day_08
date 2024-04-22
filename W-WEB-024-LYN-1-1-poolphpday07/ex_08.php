<?php

function str_beautifuler($str = null)
{
    if (!is_string($str)) {
        return null;
    }

    $result = "";
    $str = strtolower($str);
    //$str = preg_replace("/\s+/", " ", $str);
    $words = explode(" ", $str);

    if (!empty($words)) {
        foreach ($words as $word) {
            if (!empty($word)) {
                $result .= trim(strrev(ucfirst(strrev($word)))) . " ";
            }
        }

        return trim($result);
    }
}
