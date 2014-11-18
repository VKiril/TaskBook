<?php
include 'phpHelper.php';
/*
 * Write a real-valued function RadToDeg(R) that converts the angle value R in
 * radians into the one in degrees (R is a real number, 0 ≤ R < 2·π). Note that
 * 180° = π radians and use 3.14 for a value of π. Using this function, convert
 * five given angles from radians into degrees.*/
?>
<script>
    const doublePi = 6.2831853;
    const radians  = 0.0174532925;

    function RadToDeg(R){
        var response = 0 ;
        if(R>doublePi){
            response = 'extra_range_value';
        }else{
            response = R / radians ;
        }
        var about = Math.ceil(response);
        return new Array(response , about);
    }
    var deg1 = RadToDeg(3.14) ;
    var deg2 = RadToDeg(6.2831) ;
    document.getElementById('body').innerHTML = 'the 3.14 radians is ' + deg1[0] +'* degrees about ' +deg1[1]+'*' ;
    document.getElementById('body1').innerHTML = 'the 3.14 radians is ' + deg2[0] +'* degrees about ' +deg2[1]+'*' ;
</script>