<?php
/**
 * Write a procedure AddLineNumbers(S, N, K, L) that adds the number of each line of a text file called S to the
 * beginning of this line; the first line receives the number N, the second line receives the number N + 1, and so on.
 * Any number is right-aligned within K first character positions of a line and is separated from the following text
 * by L blank characters (K > 0, L > 0). If a line is empty then its number should not contain trailing blank
 * characters. Apply this procedure to a given text file using given values of parameters N, K, L.
 */

include 'helper.php';

function AddLineNumbers($S, $N, $K, $L){
    if(!file_exists($S)){
        echo '-1';
        return -1;
    }

    $handle = fopen($S, "r");
    $a = '';
    $c = $N ;
    $nr = 0 ;
    while(!feof($handle)){
        $line = fgets($handle);
        $nr++;
    }
    fclose($handle);

    $len = (string)$nr;
    $nrLen = strlen($len);
    $handle = fopen($S, "r");
    $testFile = fopen('file.txt' ,'w');
    while(! feof($handle))
    {
        $c++;
        $len = (string)$c;
        $l = strlen($len);
        $space = '';
        for($i = 0 ; $i < ($L-$l) ; $i++){
            $space = $space.$K;
        }
        $a = $c.$space.fgets($handle);
        echo $a. "<br/>";

        fwrite($testFile , $a);


    }
    fclose($testFile);
    fclose($handle);

    $handle = fopen($S, "w");
    $testFile = fopen('file.txt' ,'r');
    while(! feof($testFile))
    {
        $a = fgets($testFile);
        //var_dump($a);
        fwrite($handle , $a);
    }

    fclose($testFile);
    fclose($handle);
}

echo readfile('test.txt').'<br/><br/><br/>';

AddLineNumbers('test.txt' , 5 , ' ' , 3);