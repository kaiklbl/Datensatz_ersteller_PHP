<?php




$codes = array();

function generateCodes(array $codeArray, int $num = 1000): array{

    $go = true;

    while($go){

        $code = [];

        for ($j=0; $j < 12; $j++) { 
            $code[] = $codeArray[rand(0, count($codeArray)- 1)];
        }

        $codeString = implode('',$code);
        $newCodeString = implode('-', str_split($codeString, 4));
        $codes[] = $newCodeString;


        $codes = array_unique($codes);

        if(count($codes) >= $num){
            $go = false;
        }
    }


    return $codes;
}


function getCode($codes, $num){
    echo '"'.$codes[$num].'"';
}






?>