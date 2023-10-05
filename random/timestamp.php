<?php

function getTimestamp(int $beginnYear,int $maxYear = 2022){
    $year = rand($beginnYear,$maxYear);
    $month = rand(1,12);
    if($month == 2){
        $day = rand(1,28);
    }elseif($month == 4 || $month == 6 || $month == 9 || $month == 11){
        $day = rand(1,30);
    }else{
        $day = rand(1,31);
    }

    $hour = rand(0, 23);
    $minute = rand(1,59);
    $second = rand(1,59);

    echo '"'.$year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':'.$second.'"';

}


?>