<?php

// Passwort = ?Passwort+$num


function getPassword($num): void{
    $password = "?Passwort".$num;

    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    echo '"'.$passwordHashed.'"';
}


?>