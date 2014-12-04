/**
 * Write a string function CompressStr(S) that compresses a string S and returns the compressed string.
 * The string compression must be carried out as follows: each substring consisting of 4 or more equal
 * characters C is replaced by the string "C{K}", where K is the amount of characters C (the string being
 * compressed is assumed to contain no braces "{}"). For example, the string "bbbccccce" must be compressed
 * to "bbbc{5}e". Using this function, compress five given strings.
 */
function CompressStr($S){
    var $count = 0 ;
    var $string = '';
    //echo 'string length '.strlen($S);
    for(var $i=0;$i < $S.length-1 ; $i++){
        if($S[$i + 1] == $S[$i] && $S[$i + 2] == $S[$i] && $S[$i + 3] == $S[$i]){
            var $temp = $S[$i];
            for($j = $i ; $j < $S.length-1 ; $j++){
                if($S[$j] == $temp){
                    $count ++ ;
                }
            }

            $string = $string+$S[$i].toUpperCase()+'{'+$count+'}';
            $i = $i+$count;
            $count = 0 ;

        }
        $string = $string+$S[$i];

    }

    return $string;
}


console.log(CompressStr('sdfggggggggggbsdbhtrsfffffffffffgrswarhgfdddddddddd'));