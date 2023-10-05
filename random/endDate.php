<?php
/*
1 = 31
2 = 28
3 = 31
4 = 30
5 = 31
6 = 30
7 = 31
8 = 31
9 = 30
10 = 31
11 = 30
12 = 31

Rechenweg
$addDays + $days
wenn $addDays größer Tage
    - Tage vom Monat
        Monat ++
*/

function endDate($params, $fromDays, $toDays){
    comma();
    $addDays = rand($fromDays,$toDays);
    $year = $params[0];
    $month = $params[1];
    $days = $params[2];
    
    calculateDate($year,$month,$days,$addDays);
}





function calculateDate($year,$month,$days,$addDays){
    $num = 1;
    $addDays = $addDays + $days;
    while($num == 1){
        $num--;
        if($addDays > 31){
            if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12){
                $addDays = $addDays -31;
                $month++;
                $num++;
                continue;
            }
        }
        if ($addDays > 30){
            if($month == 4 || $month == 6 || $month == 9 || $month == 11){
                $addDays = $addDays -30;
                $month++;
                $num++;
                continue;
            }
        }
        if ($addDays > 28){
            if($month == 2){
                $addDays = $addDays -28;
                $month++;
                $num++;
                continue;
            }
        }
        if($month == 13){
            $month = 1;
            $year++;
            $num++;
        }
            
            
    }
    $days = $addDays;
    
    echo '"'.$year.'-'.$month.'-'.$days.'"';
}



?>