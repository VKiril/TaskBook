/**
 * Using the TDate type and the LeapYear function (see Param59), write an integer function DaysInMonth(D)
 * with a parameter D of TDate type. The function returns the amount of days for the month of date D. Output
 * the return values of this function for five given dates (all dates are assumed to be correct).
 */

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

var a = new TDate(2,2,2014);
console.log(DaysInMonth(a));