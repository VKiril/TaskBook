<?php
/**
 * Define a new type called TDate that is a record with three integer fields: Day (a day number), Month
 * (a month number), Year (a year number). Also write a logical function LeapYear(D) with a parameter D of
 * TDate type. The function returns True if a year of date D is a leap year, and False otherwise. Output the
 * return values of this function for five given dates (all dates are assumed to be correct). Note that a year
 * is a leap year if it is divisible by 4 except for years that are divisible by 100 and are not divisible by 400.
 */



//namespace ParamPhpJavascript;

include'helper.php';

class TDate  {

    private $Day;
    private $Month;
    private $Year;

    function __construct($Day, $Month, $Year)
    {
        $this->Day = $Day;
        $this->Month = $Month;
        $this->Year = $Year;
    }


    /**
     * @param mixed $Day
     */
    public function setDay($Day)
    {
        $this->Day = $Day;
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->Day;
    }


    /**
     * @param mixed $Month
     */
    public function setMonth($Month)
    {
        $this->Month = $Month;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->Month;
    }

    /**
     * @param mixed $Year
     */
    public function setYear($Year)
    {
        $this->Year = $Year;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->Year;
    }


    public function isLeapYear(){
        $result = '';
        for($i = 0 ; $i < $this->Day ; $i+=4){
            if($this->Year == $i){
                //echo $this->Year.' this is a leap year';
                $result = 'is leap year';
                return 1;
            }else{
               // echo $this->Year.' this is not a leap year';
                $result = 'not leap year';
            }
        }
        return $result;
    }

}

$b = new DateTime();
echo $b->format('Y-m-d H:i:s').'<br/>';
$a = new TDate(12,5,2014);
echo $a->isLeapYear();