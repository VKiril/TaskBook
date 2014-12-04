/**
 * Write a procedure UpCaseLat(S) that converts all Latin small letters of a string S to uppercase
 * (others characters of S must remain unchanged). A string S is an input and output parameter. Using
 * this procedure, process five given strings.
 */

function UpCaseLat($S){
    /*for ($i = 0 ; $i< strlen($S) ; $i++){
     $S[$i] = strtoupper($S);
     }*/
   var a = $S.toUpperCase();
    return a;
}

var $var = 'afbg wsognjrtsgolrktm tosbmntdbolsnmfdbt';
console.log(UpCaseLat($var));