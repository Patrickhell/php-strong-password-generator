<?php 

function generatedPassword($length) {
    $password = '';

    $lettersNumbersSimbols= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789?!&$£%§';

    for ($i = 0; $i < $length; $i++) {
        $password .= $lettersNumbersSimbols[rand(0, strlen($lettersNumbersSimbols) - 1)];
    }
    
    return $password;
}
