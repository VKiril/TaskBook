<head>
    <title>7</title>
</head>

<div id="body"></div>
<script>
    function Calc(A, B, Op) {


        console.log(A);
        console.log(B);
        console.log(Op);
        var result = 0 ;
        switch (Op){
            case '-': {
                        result = A - B ;
                        console.log(result);
                      }break ;
            case '+': {
                        result = A + B ;
                        console.log(result);
                      }break ;
            case '*': {
                        result = A * B ;
                        console.log(result);
                      }break ;
            case '/': {
                        result = A / B ;
                        console.log(result);
                      }break ;
            default :{
                result = 'wrong operation';
            }
        }

        return result ;
    }

    document.getElementById('body').innerHTML = 'a + b is ' + Calc(2 , 3 ,'+');
</script>
<?php
/**
 * Write a real-valued function Calc(A, B, Op) that performs an
 * arithmetic operation over nonzero real numbers A and B and returns
 * the result value. An arithmetic operation is determined by integer
 * parameter Op as follows: 1 — subtraction, 2 — multiplication, 3 — division,
 * and addition otherwise. Having input real numbers A, B and integers N1, N2, N3
 * and using this function, perform over given A, B three operations determined by
 * given N1, N2, N3. Output the result value of each operation.
 */
?>
