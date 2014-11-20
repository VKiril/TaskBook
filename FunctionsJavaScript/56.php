<?php
/**
 * rite a real-valued function Leng(xA, yA, xB, yB) that returns the length of a
 * segment AB with given coordinates of its endpoints:
 * |AB| = ((xA − xB)2 + (yA − yB)2)1/2
 * (xA, yA, xB, yB are real-valued parameters). Using this function, find the lengths of
 * segments AB, AC, AD provided that coordinates of points A, B, C, D are given.
 */
include 'phpHelper.php';
?>
<script>
    function Leng(xA, xB, yA, yB){
        var result = 0 ;
        a = (Math.pow((xA - xB) , 2));
        console.log(a);
        b = (Math.pow((yA - yB) , 2));
        console.log(b);
        result = Math.pow((a+b) , (1/2));
        if(!(Math.ceil(result) == result)){
            result = result.toFixed(3);
        }

        return result ;

    }


    document.getElementById('body').innerHTML = Leng(6,2,4,1);
    document.getElementById('body1').innerHTML = Leng(7,1,3,1);
    document.getElementById('body2').innerHTML = Leng(10,0,10,0);
</script>