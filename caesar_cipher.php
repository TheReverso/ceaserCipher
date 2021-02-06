<?php


function Cipher($character, $key) {
    if(!ctype_alpha($character)) return $character;

    $offset = ord(ctype_upper($character) ? 'A' : 'a');

    return chr(fmod(((ord($character) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key) {
    $output = "";

    $inputArray = str_split($input);

    foreach ($inputArray as $ch) {
        $output .= Cipher($ch, $key);
    }

    return $output;
}

function Decipher($input, $key) {
    return Encipher($input, 26 - $key);
}




