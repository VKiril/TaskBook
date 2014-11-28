<?php

/**
 * Write a procedure SplitText(S0, K, S1, S2) that copies first K (≥ 0) lines of an existing text file called S0
 * to a new text file called S1 and other lines of this file to a new text file called S2 (one of the resulting
 * files may be empty). Apply this procedure to a given file called S0 using given values of K, S1 S2.
 */

include'helper.php';
function SplitText($S0, $K, $S1, $S2){
    $n = 0 ;

    $handle = fopen($S0, "r");
    $handleS1 = fopen($S1 , 'w');
    $handleS2 = fopen($S2 , 'w');

    $var  = fread($handle,filesize($S0));
    $arr = explode(' ' , $var);
    //var_dump($arr);

    $arrS1 = [];
    for($i = 0 ; $i < $K ; $i ++){
        $arrS1[$i] = $arr[$i];
    }
    //var_dump($arrS1);
    $arrS2 = [];
    for($i = $K ; $i < sizeof($arr) ; $i ++){
        $arrS2[$i] = $arr[$i];
    }

    $texts1 = implode(' ',$arrS1);
    $texts2 = implode(' ',$arrS2);
    echo $texts1;
    //var_dump($arrS2);
    fwrite($handleS1 , $texts1);
    fwrite($handleS2 , $texts2);



    //die;



    //echo $var;
    //die;



    fclose($handle);
    fclose($handleS1);
    fclose($handleS2);
}

SplitText('test.txt' , 60 , 's0.txt' , 's1.txt');