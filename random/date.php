<?php

function randomDate(int $beginnYear,int $maxYear): array{
    $year = rand($beginnYear,$maxYear);
    $month = rand(1,12);
    if($month == 2){
        $day = rand(1,28);
    }elseif($month == 4 || $month == 6 || $month == 9 || $month == 11){
        $day = rand(1,30);
    }else{
        $day = rand(1,31);
    }
    echo '"'.$year.'-'.$month.'-'.$day.'"';
    return [$year,$month,$day];
}



?>