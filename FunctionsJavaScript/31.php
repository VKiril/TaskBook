<?php
/**
 * Write a function Swap(X, I, J) that exchanges the values of items
 * XI and XJ of a list X of real numbers (I and J are input integer
 * parameters, the function returns the None value). Having input a list of
 * four real numbers and using three calls of this function, sequentially
 * exchange the values of the two first, two last, and two middle items of
 * the given list. Output the new values of the list.
 */
include 'phpHelper.php';
?>
<script>
    function Swap(X, I, J){
        var a = X[I] ;
        var b = X[J] ;
        X[J] = a ;
        X[I] = b ;

        return X ;
    }
    var ar        = new Array(1,2,3,4,5,6,7,8);
    document.getElementById('body').innerHTML = 'initial order of array is ' + ar ;
    var arChanged = Swap(ar , 0,2);
    document.getElementById('body1').innerHTML =' after changing the array become ' + arChanged ;
</script>