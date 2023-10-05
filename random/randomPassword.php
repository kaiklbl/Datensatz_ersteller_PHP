<?php

function randomPassword(){
    $characters = array(
        range('a', 'z'),
        range('A', 'Z'),
        range(1, 9), 
        array('!', '?', '&')
    );

    $password = "";

    while(strlen($password) < 8){
        $char1 = $characters[0][mt_rand(0, count($characters[0]) -1)];
        $char2 = $characters[1][mt_rand(0, count($characters[1]) -1)];
        $char3 = $characters[2][mt_rand(0, count($characters[2]) -1)];
        $char4 = $characters[3][mt_rand(0, count($characters[3]) -1)];

        $password .= $char1.$char2.$char3.$char4;
    }

    $password = str_shuffle($password);
    echo '"'.$password.'"';
}

?>