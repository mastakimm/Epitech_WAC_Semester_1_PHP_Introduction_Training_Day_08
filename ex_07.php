<?php

function count_char($str)
{

    if ($str == null || !is_string($str)) {
        return "";
    }
    $result = [];
    $chars = [];

    for ($i = 0; $i < strlen($str); $i++) {
        $chars = str_split($str);
    }
    foreach ($chars as $char) {
        if ($char !== " ") {
            if (!isset($result[$char])) {
                $result[$char] = 1;
            } else {
                $result[$char]++;
            }
        }
    }
        ksort($result);

        return $result;
}
