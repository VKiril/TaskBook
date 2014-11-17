<head>
    <title>10</title>
</head>
<?php
/**
 * Write a logical function IsSquare(K) that returns True, if an
 * positive integer parameter K is a square of some integer, and
 * False otherwise. Using this function, find the amount of squares
 * in a given sequence of 10 positive integers.
 */
?>
<div id="body"></div>
<div id="body1"></div>
<script>
    function IsSquare(K){
        var result = false ;
        for(var i = 0 ; i < K ; i ++){
            if(Math.pow(i , 2) == K){

                result = true ;

                return result  ;
            } else {
                result = false ;
            }
        }

        return result  ;
    }

    document.getElementById('body').innerHTML = 'is 144 a square of some int number ?' + IsSquare(144);
    document.getElementById('body1').innerHTML = 'is 145 a square of some int number ?' + IsSquare(145);
</script>