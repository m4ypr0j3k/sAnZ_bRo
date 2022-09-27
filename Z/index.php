<?php

function kataAcak()
{
    $kataacak = 
    [
        'acak 1',
        'acak 2',
        'acak 3'
    ];

    return $kataacak[mt_rand(0, count($kataacak) - 1)];
}

echo kataAcak();

?>
