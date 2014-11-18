
<?php
/*
 * Write an integer function DigitN(K, N) that returns the N-th digit in the decimal
 * representation of a positive integer K provided that the digits are numbered from
 *  right to left. If the amount of digits is less than N then the function returns −1.
 * Using this function, output sequentially 1st, 2nd, 3rd, 4th, 5th digit for each of five
 * given positive integers K1, K2, …, K5.*/
include 'phpHelper.php';
?>
<script>
    function DigitN(K, N){
        return K.toString().charAt(N);
    }

    var  x = 1235543;
    var  x1 = 1235543;
    var  x2 = 1235543;
    var  x3 = 1235543;
    document.getElementById('body').innerHTML = 'in number ' + x + ' on position 4 is digit '  + DigitN(x , 4 ) ;
    document.getElementById('body1').innerHTML = 'in number ' + x + ' on position 0 is digit ' + DigitN(x , 0 ) ;
    document.getElementById('body2').innerHTML = 'in number ' + x + ' on position 5 is digit ' + DigitN(x , 5 ) ;
    document.getElementById('body3').innerHTML = 'in number ' + x + ' on position 6 is digit ' + DigitN(x , 6 ) ;
</script>