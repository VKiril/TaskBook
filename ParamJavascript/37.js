/**
 * Created by asus on 03.12.14.
 */

function PosSub($S0, $S){
    if($S0.indexOf($S)) {
        return $S0.indexOf($S);
    }
}


console.log(PosSub('a a a a, a fost odata fost ...' , 'fost'));