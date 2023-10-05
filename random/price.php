<?php

function getPrice(int $from,int $to){
    $priceI = rand($from,$to);
    $priceF = rand(0,99);
    echo "$priceI.$priceF";
}

?>