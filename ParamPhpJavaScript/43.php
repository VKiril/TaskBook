<?php
/**
 * Write a string function DecompressStr(S) that restores a string, which was compressed by a function CompressStr
 * (see Param42). An input parameter S is a compressed string; the function returns the decompressed value of the string
 * S. Using this function, restore five given compressed strings.
 */
include'helper.php';
function DecompressStr($S){

    $string = '';
    for($i= 0 ; $i < strlen($S) ; $i++){
        var_dump(ctype_digit($S[$i]));
        if($S[$i] == '{' && ctype_digit($S[$i+1]) && $S[$i+2] == '}'){
            for($j = 0  ; $j < $S[$i+1]; $j++){
                $string = $string.$S[$i-1];
            }
            $S[$i] = $S[$i+1] = $S[$i+2] = '';
        }

        if($S[$i] == '{' && ctype_digit($S[$i+1]) && ctype_digit($S[$i+2]) && $S[$i+3] == '}'){
            $n = intval($S[$i+1].$S[$i+2]);
            var_dump($n);

            for($j = 0 ; $j < $n ; $j++){
                $string = $string.$S[$i-1];
            }
            $S[$i] = $S[$i+1] = $S[$i+2] = $S[$i+3] =  '';
        }
        $string = $string.$S[$i];
    }

    return $string;
}


echo DecompressStr('fsadf{9}bgfeswbfdt{12}kh');
