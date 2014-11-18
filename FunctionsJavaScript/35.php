<?php
/**
 * Write a function ShiftRight3(X) that performs a right cyclic shift of a list
 * X of three real-valued items: the value ot each item should be assigned to
 * the next item and the value of the last item should be assigned to the first
 * item (the function returns the None value). Using this function, perform the
 * right cyclic shift for each of two given lists X and Y.
 */

include 'phpHelper.php';
?>

<script>
    function ShiftRight3(X){
        var l = X.length;
        console.log('length '+l);
        var y = new Array() ;
        for(var i =  0;  i < l ; i++  ){
            if(!(i == (l-1) )){
                var j = i + 1 ;
                y[j] = X[i] ;
                console.log(X[i]);
            }else{
                y[0] = X[i];
            }

        }

        return y;
    }
    var arr1 = new Array(1,2,3,4,5,6);
    document.getElementById('body').innerHTML = 'an array before shifting sort ' + arr1 ;
    var shiftArr = ShiftRight3(arr1);
    document.getElementById('body1').innerHTML = 'an array before shifting sort ' + shiftArr ;
</script>