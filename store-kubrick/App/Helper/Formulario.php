<?php

/**
 * setValor
 *
 * @param string $campo 
 * @param mixed $default 
 * @return mixed
 */
function setValor($campo, $default = "")
{
    if (isset($_POST[$campo])) {
        return $_POST[$campo];
    } else {
        return $default;
    } 
}