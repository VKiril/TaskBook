<?php
/**
 * Write a procedure UpCaseLat(S) that converts all Latin small letters of a string S to uppercase
 * (others characters of S must remain unchanged). A string S is an input and output parameter. Using
 * this procedure, process five given strings.
 */

include 'helper.php';
function UpCaseLat(&$S){
    /*for ($i = 0 ; $i< strlen($S) ; $i++){
        $S[$i] = strtoupper($S);
    }*/
    $S = strtoupper($S);
}

$var = 'afbg wsognjrtsgolrktm tosbmntdbolsnmfdbt';
UpCaseLat($var);
echo($var);