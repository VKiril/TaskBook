/**
 * Using the TDate type and the DaysInMonth function (see Param59 and Param60), write an integer function
 * CheckDate(D) with a parameter D of TDate type. If the date D is a correct date then the function returns 0;
 * if the date D contains an invalid month number or invalid day number for the correct month then the function
 * returns 1 or 2 respectively. Output the return values of this function for five given dates.
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
var a = new TDate(29,2,2014);
console.log(CheckDate1(a));