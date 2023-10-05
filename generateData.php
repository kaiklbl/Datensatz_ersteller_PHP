<?php

$num = 0;

// für codes generieren / kann stehen bleiben
$codes = generateCodes($codeArray);


// Schleifenanzahl erhöhen für mehr Datensätze
while($num != 10){

    // wird für zip und City benötigt / kann stehen bleiben
    $randomNum = mt_rand(0, count($plzArray) - 1);

    
    echo "INSERT INTO user VALUES ( NULL,";


//      Hier Kommen die DatenFunktionen rein
    
    randomPassword();
    comma();
    getString($firstNameArray);
    comma();
    getEmail($finishEmail, $num);

    


 // --------------------------------------------

    echo "); <br><br>";
    $num++;
}
?>