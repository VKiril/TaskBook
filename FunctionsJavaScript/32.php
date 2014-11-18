<?php
/**
 * Write a function Minmax(X, I, J) that writes the minimal value of items
 * XI and XJ of a list X to the item XI and writes the maximal value of these
 * items to the item XJ (I and J are input integer parameters, the function
 * returns the None value). Using four calls of this function, find the minimal
 * value and the maximal value among four given real numbers.
 */

include 'phpHelper.php';
?>
<script>
    function MinMax(X, I, J){
        var length = X.length ;
        var min = X[0] ;
        var minPos = 0 ;
        var maxPos = 0 ;
        var max = X[0] ;
        for(var i = 1 ; i < length ; i++ ){
             if(X[i] < min){
                 min = X[i] ;
                 minPos = i ;
                 console.log("min element " + min + ' position ' + minPos);
             }
            if(X[i]>max){
                max = X[i];
                maxPos = i ;
                console.log("max element " + max + ' position ' + maxPos);
            }
        }

        var a = X[I];
        var b = X[J];
        X[I]  = max ;
        X[J]  = min ;
        X[minPos] = b;
        X[maxPos] = a;

        return X ;
    }
    var firstArray = new Array(2,3,54,1,0);
    document.getElementById('body').innerHTML = 'initial order of elements of array ' + firstArray ;
    var firstResult = MinMax(firstArray , 0 , 1);
    document.getElementById('body1').innerHTML = 'changed order of elements of array' + firstResult;

</script>