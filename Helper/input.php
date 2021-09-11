<?php
/**
 * Function ini digunakan untuk menerima inputan dari user melaui terminal
 * Melalui function fgets yang mengungganakan parameter STDIN (Standar input)
 * 
 */
function input(string $info): string
{
    echo "$info : " ;
    $result = fgets(STDIN) ;
    return trim($result);
}