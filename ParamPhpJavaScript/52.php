<?php
/**
 *  Write a procedure RemoveLineNumbers(S) that removes order numbers (with leading and trailing blank
 * characters) from the beginning of each line of a text file called S (the format of order numbers is described
 * in Param51). If file lines do not contain order numbers then the procedure performs no actions. Apply this
 * procedure to a given text file.
 */
include'helper.php';
function RemoveLineNumbers($S = 'test.txt' ){
    $handle = fopen($S, "r");
    $temp = fopen('file.txt', "w");
    while(! feof($handle))
    {
        $a = fgets($handle);
        $pieces = explode(" ", $a);
        //var_dump($pieces);
        for ($i = 0 ; $i< sizeof($pieces) ; $i++){
            if(!ctype_alpha ($pieces[$i])){
                unset($pieces[$i]);

                /*if($pieces[$i+1]==' '){
                    for($j = $i ; $j< sizeof($pieces);$j++){
                        if($pieces[$j]== ' '){

                        }
                    }
                }*/
            }
        }
       // echo $a.'<br/>';
        //var_dump($pieces);
        $b = implode(' ' , $pieces);
        echo $b."<br/>";
        fwrite($temp , $b);


    }

    fclose($temp);
    fclose($handle);
}

RemoveLineNumbers();