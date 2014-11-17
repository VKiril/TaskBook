<p id="demo"></p>
<script>
    function RootCount(A, B, C){
        var d = ((B * B) - (4 * A * C)) ;
        var x1 = (-(B) - Math.sqrt(d))/(2*A);
        var x2 = (-(B) + Math.sqrt(d))/(2*A);
         sum = x1 + x2 ;
        // sum = -(B)/A ;
         console.log(sum);
        return sum;
    }

    document.getElementById("demo").innerHTML = RootCount( 2,(-8),(3));
    //RootCount( 2,(-8),(3));
</script>


<?php
/**
 *  Write an integer function RootCount(A, B, C) that returns the amount of roots
 * of the quadratic equation A·x2 + B·x + C = 0 (A, B, C are real-valued parameters, A ≠ 0).
 * Using this function, find the amount of roots for each of three quadratic equations with given
 * coefficients. Note that the amount of roots is determined by the value of a discriminant:
 * D = B2 − 4·A·C.
 */

?>
