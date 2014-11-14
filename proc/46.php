<head>
    <title>46</title>
</head>

<?php
/**
 *  Write an integer function GCD2(A, B) that returns the greatest common
 * divisor (GCD) of two positive integers A and B. Use the Euclidean algorithm:
 * GCD(A, B) = GCD(B, A mod B),    if B ≠ 0;        GCD(A, 0) = A,
 * where "mod" denotes the operator of taking the remainder after integer division.
 * Using this function, find the greatest common divisor for each of pairs (A, B), (A, C), (A, D)
 * provided that integers A, B, C, D are given.
 */

function GCD2($A, $B){
    $result = array('divisor' => 'null' , 'status' => 'null');
    if($A > $B){
        $min = $B;
        $max = $A;
    } else {
        $min = $A;
        $max = $B;
    }
    if($max % $min == 0 ){
        return $result = array('divisor' =>$min , 'status' => 'have divisors(s)');
    } else {
        for ($i = 2 ; $i < $min ; $i ++){
            if($min % $i == 0 && $max % $i == 0){
                $temp = $i ;
                $result = array('divisor' => $i , 'status' => 'have divisor(s)' );


                /*while($temp <= $min){
                    $temp = $temp*$temp ;
                    if($min % $temp == 0 && $max % $temp == 0){
                        $result = array('divisor' => $temp , 'status' => 'have divisors');
                    }
                }*/


            } else {
                if ($result['status'] != 'have divisor(s)' )
                $result = array('divisor' => 'null' , 'status' => 'don\'t have divisors');
            }
        }
    }

    return $result;
}

print_r(GCD2(18 , 12));echo('<br/>');
print_r(GCD2(10 , 12));echo('<br/>');
print_r(GCD2(8 , 12));echo('<br/>');
print_r(GCD2(4 , 12));echo('<br/>');
print_r(GCD2(5 , 12));echo('<br/>');