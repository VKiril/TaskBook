<?php
/**
 * Write an integer function MinElem(A, N) that returns the value of the minimal element
 * of an array A of N integers. Using this function, find the minimal elements of three
 * given arrays A, B, C whose sizes are NA, NB, NC respectively.
 */






$pageName = basename($_SERVER['PHP_SELF'], '.php');

function MinElem($A, $N){
    $min = $A[0];
    for($i = 0 ; $i < $N ; $i ++){
        if($min >$A[$i]){
            $min = $A[$i] ;
        }
    }
    return $min ;
}


$arr1 =  [10,2,4,3,6,1,98,5,4,3,23,65];
echo('min element of ');    print_r($arr1);   echo('is ' . MinElem($arr1 , 5).'until 5\'element <br/>');
echo('min element of ');    print_r($arr1);   echo('is ' . MinElem($arr1 , 7).'until 7\'element <br/>');
echo('min element of ');    print_r($arr1);   echo('is ' . MinElem($arr1 , 3).'until 3\'element <br/>');
?>

<head>
    <title><?php echo($pageName);?></title>
</head>