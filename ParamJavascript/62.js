/**
 * Using the TDate type and the DaysInMonth and CheckDate functions (see Param59−Param61), write a procedure
 * PrevDate(D) that changes a correct date D (of TDate type) to the previous one; if D contains an invalid date
 * then it remains unchanged. The parameter D is an input and output parameter. Apply this procedure to five given
 * dates.
 */

document.write('<scr'+'ipt type="text/javascript" src="61.js" ></scr'+'ipt>');

function PrevDate1(d){

    var checkDate = CheckDate1(d);

    if(checkDate != 0 ){
        return d;
    } else {
        if(d.month == 1 && d.day == 1 ){


            d.day = 31;
            d.month = 12;
            d.year = d.year - 1;
        } else if(d.day == 1 && d.month != 1){
            var prevMonth = new TDate(10, d.month -1 , d.year);
            var days      = DaysInMonth(prevMonth);
            d.month       = d.month - 1;
            d.day         = days[0];

        } else {
            d.day = d.day - 1;
        }
    }

    return d;
}

$a = new TDate( 1,1,2014);