<?php

function myFunc(int $i)
{
    $i *= 2;
    
    echo "in myfnc, val i is {$val} \n";
}

$i = 10;

myFunc($i);

echo "i is {$i} \n";