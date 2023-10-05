<?php

// Höchstens 10800 verschiedene Emails 
// falls mehr braucht man mehr Vor oder Nachnamen

include "globals.php";

$finishEmail = array();

function createEmail(array $finishEmail, array $firstNameArray, array $lastNameArray, array $domain): array{

    $lowerCaseFirstname = array_map('strtolower', $firstNameArray);
    $lowerCaseLastname = array_map('strtolower', $lastNameArray);
    
    for ($i=0; $i < count($lowerCaseFirstname); $i++) { 
        for ($j=0; $j < count($lowerCaseLastname); $j++) { 
            $randDomain = $domain[mt_rand(0,count($domain) - 1)];
            $newEmail = $lowerCaseFirstname[$i].'.'.$lowerCaseLastname[$j].'@'.$randDomain;
            array_push($finishEmail, $newEmail);
        }
    }

    shuffle($finishEmail);

    return $finishEmail;
}

$finishEmail = createEmail($finishEmail, $firstNameArray,$lastNameArray, $domain);


function getEmail($finishEmail, $num): void{
    echo '"'.$finishEmail[$num].'"';
}

?>