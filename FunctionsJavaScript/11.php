<head>
    <title>11</title>
</head>
<?php
/**
 * Write a logical function IsPower5(K) that returns True, if an
 * positive integer parameter K is equal to 5 raised to some integer
 * power, and False otherwise. Using this function, find the amount
 * of powers of base 5 in a given sequence of 10 positive integers.
 */

?>
<div id="body"></div>
<div id="body1"></div>
<script>
    function IsPower5(K){
        var response = false ;
        for (var i = 0 ; i < K ; i ++){
            console.log(i);
            if(Math.pow(5 , i) == K ){
                console.log('power is : ' + i);
                response = true ;

                return response ;
            } else if(Math.pow(5 , i) > K){
                console.log('false ');
                return response ;
            }
        }


    }
    document.getElementById('body').innerHTML = 'if number 625 is the 5 raised to some integer power ? ' + IsPower5(625) ;
    document.getElementById('body1').innerHTML = 'if number 626 is the 5 raised to some integer power ? ' + IsPower5(626) ;
</script>