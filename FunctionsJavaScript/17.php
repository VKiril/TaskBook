<?php
include 'phpHelper.php';
/*
 * Write a real-valued function DegToRad(D) that converts the angle
 * value D in degrees into the one in radians (D is a real number,
 * 0 ≤ D < 360). Note that 180° = π radians and use 3.14 for a value of π.
 * Using this function, convert five given angles from degrees into radians.*/
?>
<script>
    const degree  = 0.0174532925;
    function DegToRad(D){
        if(D > 360){
            D = D - 360 ;
        }
        var response = (D * degree);
        response = response.toFixed(4);
        return response;
    }
    document.getElementById('body').innerHTML = 'the number of radians in 180* is   ' + DegToRad(180) ;
    document.getElementById('body1').innerHTML = 'the number of radians in 360* is  ' + DegToRad(360) ;
    document.getElementById('body2').innerHTML = 'the number of radians in 540* is  ' + DegToRad(540) ;
    document.getElementById('body3').innerHTML = 'the number of radians in 90* is   ' + DegToRad(90) ;
</script>