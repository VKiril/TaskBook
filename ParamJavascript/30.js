/**
 * Write an integer function IsIdent(S) that indicates whether a string S is a valid identifier, that is,
 * a nonempty string that does not begin with a digit and contains Latin letters, digits, and a character "_" only.
 * If S is a valid identifier then the function returns 0. If S is an empty string or begins with a digit then the
 * function returns −1 or −2 respectively. If S contains invalid characters then the function returns the order
 * number of the first invalid character. Using this function, check five given strings.
 */

function IsIdent($S){

    if($S =="" ){
        return -1;
    } else if( isNaN($S[0]) || $S[0] == '_' ){
        return -2;
    } else {
        if (/^[0-9A-Za-z]+$/.test($S))
        {
            //there are only alphanumeric characters
            return 0;
        }
    }

}


console.log(IsIdent('1asf'));
console.log(IsIdent('fsbdtkbnfstbt'));
console.log(IsIdent('_vsfdbtsdfbt') );
console.log(IsIdent('Ajsbgtsiudfv') );
console.log(IsIdent(''));