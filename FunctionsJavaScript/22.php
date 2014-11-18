<?php
/**
 * Write a function PowerA3(A) that returns the third degree of a real number
 * A (A is an input parameter). Using this function, find the third degree of
 * five given real numbers.
 */
include 'phpHelper.php';
?>
<script>
    function PowerA3(A){
        return Math.pow(A , 3) ;
    }
    document.getElementById('body').innerHTML = 'third degree of number 3 is '+PowerA3(3);
    document.getElementById('body1').innerHTML = 'third degree of number 3 is '+PowerA3(4);
    document.getElementById('body2').innerHTML = 'third degree of number 3 is '+PowerA3(5);
</script>