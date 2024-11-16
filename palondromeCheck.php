<!-- Palondrome check (no built-in functions) -->
<?php

$test = "Aoa";

function isPalindrome($test) {

    $string_length = 0;
    while (isset($test[$string_length])) {
        $string_length++;
    }

    $temp = "";
    for ($i= 0; $i < $string_length; $i++) { 
        $lowercase_letter = toLowerCase($test[$i]);
        $temp .= $lowercase_letter;
    }
    $reversed = "";
    for ($i=$string_length - 1; $i >= 0 ; $i--) { 
        $lowercase_letter = toLowerCase($test[$i]);
        $reversed .= $lowercase_letter;
    }
    if ($reversed == $temp) {
        echo $test, " is a palindrome";
    } else {
        echo $test, " is not a palindrome";
    }

};

function toLowerCase($letter) {
    if ($letter == "A") {
        return "a";
    } else if ($letter == "B") {
        return "b";
    } else if ($letter == "C") {
        return "c";
    } else if ($letter == "D") {
        return "d";
    } else if ($letter == "E") {
        return "e";
    } else if ($letter == "F") {
        return "f";
    } else if ($letter == "G") {
        return "g";
    } else if ($letter == "H") {
        return "h";
    } else if ($letter == "I") {
        return "i";
    } else if ($letter == "J") {
        return "j";
    } else if ($letter == "K") {
        return "k";
    } else if ($letter == "L") {
        return "l";
    } else if ($letter == "M") {
        return "m";
    } else if ($letter == "N") {
        return "n";
    } else if ($letter == "O") {
        return "o";
    } else if ($letter == "P") {
        return "p";
    } else if ($letter == "Q") {
        return "q";
    } else if ($letter == "R") {
        return "r";
    } else if ($letter == "S") {
        return "s";
    } else if ($letter == "T") {
        return "t";
    } else if ($letter == "U") {
        return "u";
    } else if ($letter == "V") {
        return "v";
    } else if ($letter == "W") {
        return "w";
    } else if ($letter == "X") {
        return "x";
    } else if ($letter == "Y") {
        return "y";
    } else if ($letter == "Z") {
        return "z";
    } else {
        return $letter;
    }
}


isPalindrome($test);


