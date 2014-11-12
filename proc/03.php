<?php
/* Write a procedure Mean(X, Y, AMean, GMean) that computes
the arithmetical mean AMean = (X+Y)/2 and the geometrical mean
GMean = (X·Y)1/2 of two positive numbers X and Y (X and Y are
input parameters, AMean and GMean are output parameters; all
parameters are the real-valued ones). Using this procedure, find
the arithmetical mean and the geometrical mean of pairs
(A, B), (A, C), (A, D) provided that real numbers A, B, C, D are given. */

function Mean($X, $Y, &$AMean=0, &$GMean=0){
    $AMean = ($X+$Y)/2;
    $GMean = ($X*$Y)/2;
}
Mean(3,4,$a , $b);
echo $a.'<br/>';
echo $b.'<br/>';
