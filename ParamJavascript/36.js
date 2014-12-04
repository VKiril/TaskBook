/**
 * Write a procedure TrimRightC(S, C) that removes all trailing characters equal a character C from a string S.
 * A string S is an input and output parameter. Having input a character C and five strings and using this procedure,
 * process the given strings.
 */

function TrimRightC($S, $C){


for($i = 0 ; $i < $S.length ; $i++){
    $S = $S.replace($C,'');
}
return $S;

}


var $var = ' CCCCCCCCCCCCCCCCCCCLLLLLLLLLLLLLLLLLLLLLLLLLLLL';
console.log(TrimRightC($var , 'C'));