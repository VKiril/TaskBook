<?php
/**
 * Using the Dist function from the task Func59, write a function Alts(xA, yA, xB, yB, xC, yC)
 * that evaluates and returns the altitudes hA, hB, hC drawn from the vertices A, B, C of a
 * triangle ABC (the coordinates of vertices are input real-valued parameters). Using this
 * function, evaluate the altitudes of each of triangles ABC, ABD, ACD provided that the
 * coordinates of points A, B, C, D are given
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



    function Alts($xA, $yA, $xB, $yB, $xC, $yC){
        var hA = Dist( $xA, $yA, $xB, $yB, $xC, $yC);
        var hB = Dist( $xB, $yB, $xC, $yC, $xA, $yA);
        var hC = Dist( $xA, $yA, $xC, $yC, $xB, $yB);
        var result= [hA , hB,hC];
        return result;
    }

    var alt1 = Alts(2, 2, 6, 2, 2, 6);
    var alt2 = Alts(0, 0, 0, 1, 1, 0);
     document.getElementById('body').innerHTML='hA is : '+alt1[0]+' hB is : '+alt1[1]+' hC is : '+ alt1[2];
    document.getElementById('body1').innerHTML='hA is : '+alt2[0]+' hB is : '+alt2[1]+' hC is : '+ alt2[2];
</script>