<?php
/**
 * Write a string function InvStr(S, K, N) that returns an inverted substring of a string S.
 * The substring contains N characters of S (starting at a character with the order number K)
 * in inverse order. If K is greater than the length of S then the function returns an empty string;
 * if the length of S is less than K + N then all characters of S starting at its K-th character must
 * be inverted. Output return values of this function for a given string S and each of three pairs of
 * positive integers (K1, N1), (K2, N2), (K3, N3).
 */

function InvStr($S, $K, $N =0 ){
    if($K > strlen($S)){
        return '';
    }
    $var ='';
    for($i = strlen($S)-1 ; $i>$K ;$i--){
        $var = $var.$S[$i];
    }

    return $var;
}
?>
    'gnrewuri gnsrk gjnrskgjn sejgn sdtkjgnfs ikgnsre'<br>
<?php
echo InvStr('gnrewuri gnsrk gjnrskgjn sejgn sdtkjgnfs ikgnsre' , 15 );