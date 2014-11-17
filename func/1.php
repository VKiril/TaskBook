<?php
/**
 * Write an integer function Sign(X) that returns the following value:
 * −1,    if X < 0;        0,    if X = 0;        1,    if X > 0
 * (X is a real-valued parameter). Using this function, evaluate an expression Sign(A) + Sign(B) for given real numbers A and B.
 */
?>
<p id="demo"></p>
<script>
    function myFunction(X) {
        if(X < 0 ){

            return  (-1) ;
        } else if(X == 0 ){

            return 0 ;
        } else {
            return 1 ;
        }
    }
    var result = myFunction(-1) + myFunction(-2);
    document.getElementById("demo").innerHTML = result;
</script>
