<?php
/**
 * Write a procedure DecodeText(S, K) that decrypts the contents of a text file called S provided
 * that this file was encrypted by the method described in Param57 with using an integer parameter K.
 * Having input an integer K and using this procedure, decrypt a text file with the given name.
 */
include 'helper.php';
function DecodeText($s , $k) {

    $handle = fopen($s , 'r');
    $string = fread($handle , filesize($s));
    $buff = '';
    for($i = 0 ; $i < strlen($string) ; $i++){

        $ascii = ord($string[$i]);
        $ascii -=$k;
        //$string[$i] = chr($ascii);
        $buff = $buff.chr($ascii);
    }


    fclose($handle);
    echo $buff;
    $handle = fopen($s , 'w');
    fwrite($handle , $buff);
    fclose($handle);
}

DecodeText('test.txt' , 2);