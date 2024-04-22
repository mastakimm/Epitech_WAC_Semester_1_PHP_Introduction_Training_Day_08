<?php

function make_pangolins(&$my_array)
{
    foreach ($my_array as &$value) {
        $value = "pangolin";
    }
}
