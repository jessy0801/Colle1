<?php
function is_prime($nb) {
    $nbCheck = True;
    for ($i = 2; $i < $nb; $i++)
    {
        if ($nb % $i == 0)
        {
            $nbCheck = False;
            break;
        }
    }
    return $nbCheck;

}