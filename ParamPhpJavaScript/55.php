<?php
/**
 * Write a procedure StringFileToText(S) that converts a binary file of strings called S to a new text file
 * with the same name. Using this procedure, convert two given files of strings with the names S1, S2 to
 * text files.
 */
include 'helper.php';

function StringFileToText($S){

    $handle = fopen($S, "r+");
    $var  = fread($handle,filesize($S));
    $arr = explode(' ',$var);
    $ascii = 0 ;
    $text = '';
    for($i = 0 ; $i<sizeof($arr);$i++){

        $ascii = chr(bin2hex($arr[$i]));
        $text = $text.' '.$ascii;

    }
    fwrite($handle , $text);

    fclose($handle);
}
StringFileToText('test.txt');

