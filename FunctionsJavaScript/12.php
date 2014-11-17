<head>
    <title>12</title>
</head>
<?php
/**
 * Write a logical function IsPowerN(K, N) that returns True,
 * if an positive integer parameter K is equal to N (> 1) raised to some
 * integer power, and False otherwise. Having input an integer N (> 1) and a
 * sequence of 10 positive integers and using this function, find the amount
 * of powers of base N in the given sequence.
 */

?>
<div id="body"></div>
<div id="body1"></div>
<script>
    function IsPowerN(K, N){
        var result = false ;
        for(var i = 0 ; i < K ; i ++){
            if(Math.pow(N , i) == K){
                result = true ;
                return result ;
            } else if(Math.pow(N , i) > K){

                return result ;
            }
        }
    }
    document.getElementById('body').innerHTML = 'if 144 is equal to 12 raised to some integer power ? ' + IsPowerN(144 , 12);
    document.getElementById('body1').innerHTML = 'if 144 is equal to 12 raised to some integer power ? ' + IsPowerN(1445 , 12);
</script>