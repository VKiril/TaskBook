<?php
/**
 * Write a procedure TrimRightC(S, C) that removes all trailing characters equal a character C from a string S.
 * A string S is an input and output parameter. Having input a character C and five strings and using this procedure,
 * process the given strings.
 */

function TrimRightC(&$S, $C){
    for($i = 0 ; $i < strlen($S) ; $i++){
        if($S[$i] == $C){
            $S[$i] = '';
        }
    }


    //$S = str_replace($S , $C ,'');
}

$var = ' CCCCCCCCCCCCCCCCCCCLLLLLLLLLLLLLLLLLLLLLLLLLLLL';
TrimRightC($var , 'C');
echo($var);