<?php
/**
 * Write a procedure TrimLeftC(S, C) that removes all leading characters equal a character C from a string S.
 * A string S is an input and output parameter. Having input a character C and five strings and using this procedure,
 * process the given strings.
 */

function TrimLeftC(&$S, $C){
    for($i = 0 ; $i < strlen($S) ; $i++){
        if($S[$i] == $C){
            $S[$i] = '';
        }
    }


    //$S = str_replace($S , $C ,'');
}

$var = ' CCCCCCCCCCCCCCCCCCCLLLLLLLLLLLLLLLLLLLLLLLLLLLL';
TrimLeftC($var , 'C');
echo($var);