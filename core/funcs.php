<?php


function dump($data): void{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data): void{
    dump($data);
    die;
}