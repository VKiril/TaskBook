<?php
/**
 * Write a procedure TextToStringFile(S) that converts a text file called S to a new binary file of strings
 * with the same name. Using this procedure, convert two given text files with the names S1, S2 to binary files
 * of strings.
 */
function TextToStringFile($S){
    /*$asciiToBin1 =  array(
        'A'  => 01000001 ,
        'B'  => 01000010 ,
        'C'  => 01000011 ,
        'D'  => 01000100 ,
        'E'  => 01000101 ,
        'F'  => 01000110 ,
        'G'  => 01000111 ,
        'H'  => 01001000 ,
        'I'  => 01001001 ,
        'J'  => 01001010 ,
        'K'  => 01001011 ,
        'L'  => 01001100 ,
        'M'  => 01001101 ,
        'N'  => 01001110 ,
        'O'  => 01001111 ,
        'P'  => 01010000 ,
        'Q'  => 01010001 ,
        'R'  => 01010010 ,
        'S'  => 01010011 ,
        'T'  => 01010100 ,
        'U'  => 01010101 ,
        'V'  => 01010110 ,
        'W'  => 01010111 ,
        'Z'  => 01011010 ,
        'Y'  => 01011001 ,
        ','  => 00101100 ,
        '.'  => 00101110 ,
        '-'  => 00101101 ,
        '*'  => 00101010 ,
        '/'  => 00101111 ,
        '!'  => 00100001 ,
        '@'  => 01000000 ,
        '$'  => 00100100 ,
        '%'  => 00100101 ,
        '^'  => 01011110 ,
        '('  => 00101000 ,
        ')'  => 00101001 ,
        '_'  => 01011111 ,
        '{'  => 01111011 ,
        '}'  => 01111101 ,
        '['  => 01011011 ,
        ']'  => 01011101 ,
        '?'  => 00111111 ,
        '\\' => 01011100 ,
        '|'  => 01111100 ,
        '<'  => 00111100 ,
        '>'  => 00111110 ,
        ':'  => 00111010 ,
        '+'  => 00101011 ,
        "'"  => 00100111 ,
        '"'  => 00100010 ,
        '~'  => 01111110 ,
        '`'  => 01100000 ,
        '#'  => 00100011 ,
        ' '  => 00100000,

    );*/

    $handle = fopen($S, "r+");
    $var  = fread($handle,filesize($S));
    $arr = explode(' ',$var);
    $bin = 0 ;
    $text = '';
    for($i = 0 ; $i<sizeof($arr);$i++){

        $bin = hex2bin (ord($arr[$i]));
        $text = $text.' '.$bin;

    }
    fwrite($handle , $text);

    fclose($handle);
}