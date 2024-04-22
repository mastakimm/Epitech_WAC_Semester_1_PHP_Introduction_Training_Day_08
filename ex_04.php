<?php

function clear_and_replace($string, $word)
{
    $string = trim($string);

    $words = explode(" ", $string);
    $count = 0;
    $result = "";

    foreach ($words as $key => $value) {
        if ($value === $word && $count < 2) {
            $value = "Pangolin";
            $count++;
        }

        if (!empty($value)) {
            $result .= $value . " ";
        }
    }
    return rtrim($result);
}
