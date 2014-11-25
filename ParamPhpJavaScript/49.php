<?php
/**
 * Write an integer function LineCount(S) that returns the amount of lines in a text file called S.
 * If the required file does not exist then the function returns −1. Using this function, output the
 * amount of lines for three text files with given names.
 */
include 'helper.php';
echo("<div style='width: 800px; margin-left: 20% ;' >");
function LineCount($S){
    if(!file_exists($S)){
        echo '-1';
        return -1;
    }
    $file= $S;
    $lineCount = 0;
    $handle = fopen($file, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        $lineCount++;
    }

    fclose($handle);

    echo "<br/> number of lines is : ".$lineCount;
}

echo readfile('test.txt').'<br/>';

LineCount("test.txt");

echo('</div>');