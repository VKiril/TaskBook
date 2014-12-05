/**
 * Using the TDate type and the DaysInMonth and CheckDate functions (see Param59−Param61), write a procedure
 * PrevDate(D) that changes a correct date D (of TDate type) to the previous one; if D contains an invalid date
 * then it remains unchanged. The parameter D is an input and output parameter. Apply this procedure to five given
 * dates.
 */

document.write('<scr'+'ipt type="text/javascript" src="61.js" ></scr'+'ipt>');


function TDate(d,m,y){
    this.day  = d;
    this.month= m;
    this.year = y;
    this.isLeapYear = function (){
        var $result = '';
        for(var $i = 0 ; $i < this.day ; $i+=4){
            if(this.year == $i){
                //echo $this->Year.' this is a leap year';
                $result = 1;
                return $result;
            }else{
                // echo $this->Year.' this is not a leap year';
                $result = 0;
            }
        }
        return $result;
    }
}


function DaysInMonth(D){

    var nrOfDays = D.isLeapYear()
        ?   29
        :   28;

    var days = [31,nrOfDays,31, 30, 31,30, 31,31,30, 31, 30, 31];

    return [days[D.month-1], D.month];
}


function CheckDate1(d){
    var response = 0;

    if(d.month > 12){
        response = 1 ;
    }
    var numberOfDays = DaysInMonth(d);
    if (d.day > numberOfDays[0]){
        response = 2 ;
    }

    return response;
}


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

var a = new TDate( 1,1,2014);
console.log(PrevDate1(a));