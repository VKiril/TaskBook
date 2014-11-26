<?php

/**
 * Write a procedure SplitText(S0, K, S1, S2) that copies first K (≥ 0) lines of an existing text file called S0
 * to a new text file called S1 and other lines of this file to a new text file called S2 (one of the resulting
 * files may be empty). Apply this procedure to a given file called S0 using given values of K, S1 S2.
 */
include'helper.php';
function SplitIntFile($S0, $K, $S1, $S2){
    $n = 0 ;

    $handle = fopen($S0, "r");
    $handleS1 = fopen($S1 , 'w');
    $handleS2 = fopen($S2 , 'w');
    while(! feof($handle))
    {
        $n++ ;
        $line = fgets($handle);
    }
    fclose($handle);
    if($K > $n){
        echo'k is greater than file row numbers';
        return 1;
    }
    $n = 0 ;
    $handle = fopen($S0, "r");
    while(! feof($handle))
    {
        $n++ ;
        $line = fgets($handle);
        if($n < $K){
            fwrite($handleS1 , $line);
        } else {
            fwrite($handleS2 , $line);
        }

    }

    fclose($handle);
    fclose($handleS1);
    fclose($handleS2);
}

SplitIntFile('test.txt' , 6 , 's0.txt' , 's1.txt');