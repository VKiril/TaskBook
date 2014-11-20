<?php
/**
 * Using the Leng and Perim functions from the tasks Func56 and Func57, write a
 * real-valued function Area(xA, yA, xB, yB, xC, yC) that returns the area of a triangle ABC:
 * SABC = (p·(p−|AB|)·(p−|AC|)·(p−|BC|))1/2,
 * where p is the half-perimeter. Using the Area function, find the areas of
 * triangles ABC, ABD, ACD provided that coordinates of points A, B, C, D are given.
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


    var area1 = Area(2,2,2,6,6,2);
    var area2 = Area(0,0,0,1,1,0);
     document.getElementById('body').innerHTML =   ' length (2,2,2,6,6,2) area ' + area1[1] ;
    document.getElementById('body1').innerHTML =   ' length (0,0,0,1,1,0) area ' + area2[1] ;
</script>