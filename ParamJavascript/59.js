/**
 * Define a new type called TDate that is a record with three integer fields: Day (a day number), Month
 * (a month number), Year (a year number). Also write a logical function LeapYear(D) with a parameter D of
 * TDate type. The function returns True if a year of date D is a leap year, and False otherwise. Output the
 * return values of this function for five given dates (all dates are assumed to be correct). Note that a year
 * is a leap year if it is divisible by 4 except for years that are divisible by 100 and are not divisible by 400.
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

var a = new TDate(12,12,2014);
console.log(a.isLeapYear());


