<?php
/**
 * Write a procedure StringFileToText(S) that converts a binary file of strings called S to a new text file
 * with the same name. Using this procedure, convert two given files of strings with the names S1, S2 to
 * text files.
 */
include 'helper.php';

function StringFileToText($S){


$binToAscii =  array(
    '01000001'  =>  'A' ,
    '01000010'  =>  'B' ,
    '01000011'  =>  'C' ,
    '01000100'  =>  'D' ,
    '01000101'  =>  'E' ,
    '01000110'  =>  'F' ,
    '01000111'  =>  'G' ,
    '01001000'  =>  'H' ,
    '01001001'  =>  'I' ,
    '01001010'  =>  'J' ,
    '01001011'  =>  'K' ,
    '01001100'  =>  'L' ,
    '01001101'  =>  'M' ,
    '01001110'  =>  'N' ,
    '01001111'  =>  'O' ,
    '01010000'  =>  'P' ,
    '01010001'  =>  'Q' ,
    '01010010'  =>  'R' ,
    '01010011'  =>  'S' ,
    '01010100'  =>  'T' ,
    '01010101'  =>  'U' ,
    '01010110'  =>  'V' ,
    '01010111'  =>  'W' ,
    '01011010'  =>  'Z' ,
    '01011001'  =>  'Y' ,
    '00101100'  =>  ',' ,
    '00101110'  =>  '.' ,
    '00101101'  =>  '-' ,
    '00101010'  =>  '*' ,
    '00101111'  =>  '/' ,
    '00100001'  =>  '!' ,
    '01000000'  =>  '@' ,
    '00100100'  =>  '$' ,
    '00100101'  =>  '%' ,
    '01011110'  =>  '^' ,
    '00101000'  =>  '(' ,
    '00101001'  =>  ')' ,
    '01011111'  =>  '_' ,
    '01111011'  =>  '{' ,
    '01111101'  =>  '}' ,
    '01011011'  =>  '[' ,
    '01011101'  =>  ']' ,
    '00111111'  =>  '?' ,
    '01011100'  =>  '\\',
    '01111100'  =>  '|' ,
    '00111100'  =>  '<' ,
    '00111110'  =>  '>' ,
    '00111010'  =>  ':' ,
    '00101011'  =>  '+' ,
    '00100111'  =>  "'" ,
    '00100010'  =>  '"' ,
    '01111110'  =>  '~' ,
    '01100000'  =>  '`' ,
    '00100011'  =>  '#' ,
    '00100000'  =>  ' '

);


    $handle = fopen($S, "r+");
    $var  = fread($handle,filesize($S));
    $arr = explode(' ',$var);
    var_dump($arr);
    var_dump(sizeof($arr));
    var_dump(sizeof($binToAscii));
    //die;
    $text = '';
    for($i = 0 ; $i<sizeof($arr)-2;$i++){
        for($j = 0 ; $j < sizeof($binToAscii)-10;$j++){
            if($arr[$i] == $binToAscii[$j]){
                $text = $text.$binToAscii[$j];
                echo $text.'<br/>';
            }
            return 1;
        }
    }
    fwrite($handle , $text);

    fclose($handle);
}
StringFileToText('test.txt');

