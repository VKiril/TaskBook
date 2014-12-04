/**
 * Write a string function DecompressStr(S) that restores a string, which was compressed by a function CompressStr
 * (see Param42). An input parameter S is a compressed string; the function returns the decompressed value of the string
 * S. Using this function, restore five given compressed strings.
 */

function DecompressStr($S){

    var $string = '';
    for(var $i= 0 ; $i < $S.length ; $i++){
        if($S[$i] == '{' && !isNaN($S[$i+1]) && $S[$i+2] == '}'){


            for($j = 0  ; $j < $S[$i+1]; $j++){
                $string = $string+$S[$i-1];
            }
            $S[$i] = $S[$i+1] = $S[$i+2] = '';
            $i = $i+3;
        }

        if($S[$i] == '{' && !isNaN($S[$i+1]) && !isNaN($S[$i+2]) && $S[$i+3] == '}'){

            var $n = parseInt($S[$i+1]+$S[$i+2]);

            for(var $j = 0 ; $j < $n ; $j++){
                $string = $string+$S[$i-1];
            }
            $S[$i] = $S[$i+1] = $S[$i+2] = $S[$i+3] =  '';
            $i = $i+4;
        }
        $string = $string+$S[$i];
    }

    return $string;
}



console.log(DecompressStr('fsadf{9}bgfeswbfdt{12}kh'));