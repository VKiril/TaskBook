<?php
/**
 * Write a function SortDec3(X) that sorts the list X of three real-valued
 * items in descending order (the function returns the None value).
 * Using this function, sort each of two given lists X and Y.
 */

include 'phpHelper.php';
?>
<script>
    function SortDec3(X){
        var len = X.length;
        //console.log(len);
        var min = 0 ;
        for (var i = 0; i <len ; i++){
            for(var j = 0 ; j < len ; j++){
                console.log(i + ' and ' + j+' and array ' + X[j]);
                if(X[i] > X[j]){
                    min = X[j] ;
                    X[j] = X[i];
                    X[i] = min ;
                }
            }
        }

        return X ;

    }


    var arr1 = new Array(3, 2, 1  , 4);
    document.getElementById('body').innerHTML = 'an array before descending sort ' + arr1 ;
    var descArr = SortDec3(arr1);
    document.getElementById('body1').innerHTML = 'an array after descending sort ' + descArr ;
</script>