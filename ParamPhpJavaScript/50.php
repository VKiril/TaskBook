<?php
/**
 * Write a procedure InvIntFile(S) that changes the order of components of a binary file of integers called S
 * to inverse one. If the required file does not exist then the procedure performs no actions. Using this procedure,
 * process three binary files of integers with given names.
 */
include 'helper.php';
function InvIntFile(&$S){
    if(!file_exists($S)){
        return 'no action';
    }
    $file = fopen( $S, 'r+');
    $var = fread($file,filesize($S));
    $arr = explode(' ', $var);
    $inverse = '';
    foreach($arr as $element){
        $inverse = $element.' '.$inverse;
    }

    file_put_contents($S , $inverse);
    //echo $inverse;
    fclose($file);

}

$var = 'test.txt';
echo readfile($var).'<br/><br/><br/>';

InvIntFile($var);
echo readfile($var).'<br/>';