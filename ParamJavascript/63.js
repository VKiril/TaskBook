/**
 * Created by asus on 03.12.14.
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


function NextDate1(d){

    var checkDate = CheckDate1(d);
    var nrOfDays = DaysInMonth(d);
    if(checkDate != 0 ){
        return d;
    } else {
        if(d.month == 31 && d.day == 12 ){


            d.day = 1;
            d.month = 1;
            d.year = d.year + 1;
        } else if(d.day == nrOfDays[0]){
            d.month       = d.month + 1;
            d.day         = 1;

        } else {
            d.day = d.day + 1;
        }
    }

    return d;
}

var a = new TDate( 1,1,2014);
console.log(NextDate1(a));