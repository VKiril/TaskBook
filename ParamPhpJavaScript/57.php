<?php
/**
 * Write a procedure EncodeText(S, K) that encrypts the contents of a text file called S using the right cyclic
 * shift of any Latin letter by K positions of the English alphabet (0 < K < 10). For instance, if K = 3 then
 * the letter "A" is encoded by the letter "D", "a" is encoded by "d", "B" is encoded by "E", "z" is encoded
 * by "c", and so on. Blank characters and punctuation marks should not be changed. Having input an integer K
 * and using this procedure, encrypt a text file with the given name.
 */

function EncodeText($s , $k) {

    $handle = fopen($s , 'r');
    $string = fread($handle , filesize($s));
    $buff = '';
    for($i = 0 ; $i < strlen($string) ; $i++){

        $ascii = ord($string[$i]);
        $ascii +=$k;
        //$string[$i] = chr($ascii);
        $buff = $buff.chr($ascii);
    }


    fclose($handle);
    echo $buff;
    $handle = fopen($s , 'w');
    fwrite($handle , $buff);
    fclose($handle);
}

EncodeText('test.txt' , 4);
