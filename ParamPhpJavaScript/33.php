<?php
/**
 * Write a procedure LowCaseLat(S) that converts all Latin capital letters of a string S to lowercase
 * (others characters of S must remain unchanged). A string S is an input and output parameter. Using this
 * procedure, process five given strings.
 */
include 'helper.php';

function LowCaseLat(&$S) {
    $S = strtolower ($S);
}


$var = 'ALDSNGBR JGNSDK JNGSKJGNH SKJGNWOEINHR D8KLJGNBTKLJXGN PSIJRHGTFD';
LowCaseLat($var);
echo($var);