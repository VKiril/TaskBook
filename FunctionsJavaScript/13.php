<?php
/**
 * Write a logical function IsPrime(N) that returns True, if an integer
 * parameter N (> 1) is a prime number, and False otherwise. Using this
 * function, find the amount of prime numbers in a given sequence of 10
 * integers greater than 1. Note that an integer (> 1) is called a prime
 * number if it has not positive divisors except 1 and itself.
 */ ?>

<div id="body"></div>
<div id="body1"></div>
<script>
    function IsPrime(N){
        var inc = 0 ;
        var response ='';
        var numbers = 0 ;
        for(var  i = 2 ; i < N ; i ++){
            if(N % i == 0 ){
                inc ++ ;
                response = 'this is not prime number';
                numbers = numbers + i + ' , ';
            }
        }
        if(inc == 0 ){
            response = 'this is prim number';
            numbers = 0 ;
        }

        return new Array( response , numbers , inc );
    }

    var prime = IsPrime(31) ;
    document.getElementById('body').innerHTML = ' 31 ... status " : ' + prime[0] + ' " numbers of divisors : '
                                               + prime[1] + ' numbers of divisors : ' + prime[2] ;

    var prime1 = IsPrime(44) ;
    document.getElementById('body1').innerHTML = '44 ... status : " ' + prime1[0] + ' " numbers of divisors : '
        + prime1[1] + ' numbers of divisors : ' + prime1[2] ;
</script>
