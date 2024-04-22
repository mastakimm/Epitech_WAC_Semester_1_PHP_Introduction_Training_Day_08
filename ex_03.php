<?php

function my_mail($mail)
{
    $arobase = strpos($mail, "@");

    if (!$arobase) {
        $lastPoint = strrpos($mail, ".");

        if (!$lastPoint) {
            echo substr($mail, $arobase + 1, (strlen($mail) - $lastPoint) * -1);
        }
    }
}
