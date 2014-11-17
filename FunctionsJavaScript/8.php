<head>
    <title>8</title>
</head>
<?php
/**
 * Write an integer function Quarter(x, y) that returns the number
 * of a coordinate quarter containing a point with nonzero real-valued
 * coordinates (x, y). Using this function, find the numbers of coordinate
 * quarters containing each of three points with given nonzero coordinates.
 */
?>
<div id="body"></div>
<script>
    function Quarter(x, y){
        var result = 0;
        if(x > 0 && y > 0){
            result = 1 ;
        } else if (x < 0 && y > 0){
            result = 2 ;
        } else if (x < 0 && y < 0){
            result = 3 ;
        } else if (x > 0 && y < 0){
            result = 4 ;
        }
        return result ;
    }

    document.getElementById('body').innerHTML = 'number of the of a coordinate quarter is :  ' + Quarter((-5) , (-2));
</script>

