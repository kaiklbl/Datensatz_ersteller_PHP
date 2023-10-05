<?php


$randomNum = 0;

function getCity($plzArray,$num){
    echo '"'.$plzArray[$num][0].'"';

}

function getZip($plzArray, $num){
    echo $plzArray[$num][1];
}

?>