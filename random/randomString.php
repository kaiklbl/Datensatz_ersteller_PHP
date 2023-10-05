<?php

function getString(array $arr): void{
    $name = $arr[mt_rand(0,count($arr) - 1)];
    echo '"'.$name.'"';
}

?>