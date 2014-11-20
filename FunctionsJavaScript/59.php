<?php
/**
 * Using the Leng and Area functions from the tasks Func56 and Func58, write a real-valued
 * function Dist(xP, yP, xA, yA, xB, yB) that returns the distance D(P, AB) between a point P and a line AB:
 * D(P, AB) = 2·SPAB/|AB|,
 * where SPAB is the area of the triangle PAB. Using this function, find the distance between a
 * point P and each of lines AB, AC, BC provided that coordinates of points P, A, B, C are given.
 */
include 'phpHelper.php';
?>
<script>
    function Leng(xA, xB, yA, yB){
        var result = 0 ;
        var a = (Math.pow((xA - xB) , 2));
        console.log(a);
        var b = (Math.pow((yA - yB) , 2));
        console.log(b);
        result = Math.pow((a+b) , (1/2));
        if(!(Math.ceil(result) == result)){
            result = result.toFixed(3);
        }

        return result ;
    }

    function allLength($xA, $yA, $xB, $yB, $xC, $yC){

        var a = Math.abs(Leng($xA, $xB, $yA, $yB));
        var b = Math.abs(Leng($xB, $xC, $yB, $yC));
        var c = Math.abs(Leng($xA, $xC, $yA, $yC));
        var len = [a ,b ,c];
        var val = Perim(len);
        var result =  [val,len];
        return result ;
    }

    function Perim(val){
        var perimeter = val[0] + val[1] + val[2];
        return perimeter ;
    }





    function Area($xA, $yA, $xB, $yB, $xC, $yC){
        var result = allLength($xA, $yA, $xB, $yB, $xC, $yC);
        var term1 = Math.abs(result[0] - result[1][0]);
        var term2 = Math.abs(result[0] - result[1][1]);
        var term3 = Math.abs(result[0] - result[1][2]);
        var underRootExpression = result[0] * term1 * term2 * term3 ;
        var area = Math.sqrt(underRootExpression );
        area = area.toFixed(3) ;
        var response  = [result ,area];
        return response ;
    }




    function Dist( $xA, $yA, $xB, $yB, $xP, $yP){
        var result = Area($xA, $yA, $xB, $yB, $xP, $yP);
        var area = result[1];
        var a = result[0][1][0];
        var distance = (2 * area) / a ;
        return distance ;
    }


     document.getElementById('body').innerHTML =  Dist(2,2,2,6,6,2);
    document.getElementById('body1').innerHTML =  Dist(0,0,0,1,1,0);
</script>