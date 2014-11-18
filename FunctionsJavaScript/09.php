<head>
    <title>9</title>
</head>
<?php
/**
 * Write a logical function Even(K) that returns True, if an integer
 * parameter K is an even number, and False otherwise. Using this function,
 * find the amount of even numbers in a given sequence of 10 integers.
 */

?>
<div id="body"></div>
<div id="body1"></div>
<div id="body2"></div>
<div id="body3"></div>
<div id="body4"></div>
<div id="body5"></div>
<script>
    function Even(K){
        var response = true ;
        if(K % 2 == 0){
            response = true ;
        } else {
            response = false ;
        }

        return response ;
    }
    document.getElementById('body').innerHTML = 'is number 9 even ? ' + Even(9) ;
    document.getElementById('body1').innerHTML = 'is number 10 even ? ' + Even(10) ;
    document.getElementById('body2').innerHTML = 'is number 2 even ? ' + Even(2) ;
    document.getElementById('body3').innerHTML = 'is number 3 even ? ' + Even(3) ;
    document.getElementById('body4').innerHTML = 'is number 11 even ? ' + Even(11) ;
    document.getElementById('body5').innerHTML = 'is number 16 even ? ' + Even(16) ;
</script>