<?php
/**
 * Write an integer function IsIdent(S) that indicates whether a string S is a valid identifier, that is,
 * a nonempty string that does not begin with a digit and contains Latin letters, digits, and a character "_" only.
 * If S is a valid identifier then the function returns 0. If S is an empty string or begins with a digit then the
 * function returns −1 or −2 respectively. If S contains invalid characters then the function returns the order
 * number of the first invalid character. Using this function, check five given strings.
 */

function IsIdent($S){

    if($S =="" ){
        return -1;
    } elseif( ctype_digit($S) || $S[0] == '_' ){
        return -2;
    } else {
        for($i = 0 ; $i< strlen($S) ; $i++){
            if(ctype_digit($S[$i]) || ctype_alpha($S[$i]) ||$S[$i] == '_'  ){
                return 0;
            }
    }
    }

}



echo '<br/>'.IsIdent('1asf').'<br/>';
echo '<br/>'.IsIdent('fsbdtkbnfstbt').'<br/>';
echo '<br/>'.IsIdent('_vsfdbtsdfbt').'<br/>';
echo '<br/>'.IsIdent('Ajsbgtsiudfv').'<br/>';
echo '<br/>'.IsIdent('').'<br/>';