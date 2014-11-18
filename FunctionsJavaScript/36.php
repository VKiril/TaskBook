<?php
/**
 * Write a function ShiftLeft3(X) that performs a left cyclic
 * shift of a list X of three real-valued items: the value ot each
 * item should be assigned to the previous item and the value of
 * the first item should be assigned to the last item (the function
 * returns the None value). Using this function, perform the left
 * cyclic shift for each of two given lists X and Y.
 */
include 'phpHelper.php';
?>
<script>
    function ShiftLeft3(X){
        var l = X.length;
        console.log('length '+l);
        var y = new Array() ;
        for(var i = 0 ; i < (l) ; i ++) {
            y[0] = 0 ;
            y[i+1] = X[i];
        }
        for(var i = 1 ; i < l ; i ++){
            X[0] = y[l];
            X[i] = y[i];
        }
        console.log(y);

        return X;
    }
    var arr1 = new Array(1,2,3,4,5,6,7,8);
    document.getElementById('body').innerHTML = 'an array before shifting sort ' + arr1 ;
    var shiftArr = ShiftLeft3(arr1);
    document.getElementById('body1').innerHTML = 'an array before shifting sort ' + shiftArr ;
    var shiftArr1 = ShiftLeft3(shiftArr);
    document.getElementById('body2').innerHTML = 'an array before shifting sort ' + shiftArr1 ;
    var shiftArr2 = ShiftLeft3(shiftArr);
    document.getElementById('body3').innerHTML = 'an array before shifting sort ' + shiftArr2 ;
</script>