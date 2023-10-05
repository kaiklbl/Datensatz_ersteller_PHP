<?php

include "globals.php";


include "random/comma.php";
// setzt ein , 
// comma();


include "random/uniqueEmail.php";
// setzt einzigartige Zufällige Email
// beschränkt auf maximal 10800 verschiedene für mehr muss man in globals 
// firstname oder lastname erweitern
// getEmail($finishEmail, $num);


include "random/date.php";
// setzt ein Zufälliges Datum
// Braucht ein anfangs Jahr und End Jahr
// randomDate(int Von, int Bis); => zB, 2022, 2024


include "random/endDate.php";
// setzt ein Datum + AblaufDatum
// endDate(randomDate(int Von, int Bis) => (zB, 2022, 2024) , int VonTage => 10 , int BisTage => 30);
// ZB:   endDate(randomDate(2022,2222), 10,100);


include "random/password.php";
// setzt ein gehashtes passwort 
// Passwort = ?Passwort+id
// getPassword($password, $num + 1);


include "random/cityZip.php";
// setzt eine city oder eine PostleitZahl
// $randomNum = mt_rand(0, count($plzArray) - 1); => wird benötigt um den Ort und PLZ richtig zu halten
// getCity($plzArray,$randomNum); für Ort
// getZip($plzArray,$randomNum); für PLZ



include "random/int.php";
// setzt zufällige Zahlen Von -> Bis
// getInt(int Von, int Bis) => zB; 10, 2000



include "random/timestamp.php";
// setzt ein Datum mit Uhrzeit
// getTimestamp(int beginnyear,int endyear);



include "random/randomString.php";
// setzt von einem Array einen zufälligen String
// getString(array $arr) => $firstNameArray, $lastNameArray, $streetArray


include "random/price.php";
// Setzt einen zufälligen Price mit 2 Nachkommastellen
// getPrice(int Von, int Bis); 



include "random/codes.php";
// setzt einzigartige Codes in Form AAAA-AAAA-AAAA
// $codes = generateCodes($codeArray, optional int => wie viele Codes generiert werden DEFAULT 1000);  
// => Generiert die codes in Array
// getCode($num,$codes);


include "random/allFromArray.php";
// geht alle in einem Array durch und setzt
// getArrayElem(array $arr, int $num)


include "random/randomPassword.php";
// Erzeugt zufällige 8 stellige Passwörter die Groß,Klein,SonderZeichen und Zahlen enthält
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatensatzErsteller</title>
</head>
<body>

<?php include "generateData.php";?>

</body>
</html>