<?php
/**
 * Using the Leng function from the task Func56, write a real-valued
 * function Perim(xA, yA, xB, yB, xC, yC) that returns the perimeter of a
 * triangle ABC with given coordinates of its vertices (xA, yA, xB, yB, xC, yC
 * are real-valued parameters). Using the Perim function, find the perimeters of
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
     var perimeter1 = allLength(2,2,2,6,6,2);
     var perimeter2 = allLength(0,0,0,1,1,0);

     document.getElementById('body').innerHTML = 'area ' + perimeter1[0] + 'and perimeter ' + perimeter1[1] ;
    document.getElementById('body1').innerHTML = 'area ' + perimeter2[0] + 'and perimeter ' + perimeter2[1]
</script>