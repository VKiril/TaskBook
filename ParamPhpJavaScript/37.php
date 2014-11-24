<?php
/**
 * Write an integer function PosSub(S0, S, K, N) that searches for the first occurrence of a string S0 within a
 * substring of a string S (the substring contains N characters of S starting at a character with the order number K).
 * The function returns the order number of the first character of this occurrence within S. If K is greater than the
 * length of S then the function returns 0; if the length of S is less than K + N then all characters of S starting at
 * its K-th character must be analyzed. If the required substring of S does not contain occurrences of S0 then the
 * function returns 0. Output return values of this function for given strings S0, S and each of three pairs of
 * positive integers (K1, N1), (K2, N2), (K3, N3).
 */
include'helper.php';
function PosSub($S0, $S, $K=0, $N=0){
   if(strpos($S0 , $S)) {
       echo strpos($S0 , $S);
   }
}

PosSub('a a a a, a fost odata fost ...' , 'fost');