<?php
/**
 * Define a new type called TPoint that is a record with two real-valued fields: X (an x-coordinate),
 * Y (an y-coordinate). Also write a real-valued function Leng(A, B) that returns the length of a segment AB (A and B
 * are input parameters of TPoint type):
 * |AB| = ((A.X − B.X)2 + (A.Y − B.Y)2)1/2.
 * Using this function, output lengths of segments AB, AC, AD provided that the coordinates of points A, B, C, D are
 * given.
 */

namespace TPoint;
include 'helper.php';
class TPoint{
    private $X ;
    private $Y;

    /**
     * @param mixed $Y
     */
    public function setY($Y)
    {
        $this->Y = $Y;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->Y;
    }

    /**
     * @param mixed $X
     */
    public function setX($X)
    {
        $this->X = $X;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->X;
    }
    function __construct($A , $B){
        $this->setY($B);
        $this->setX($A);
    }

}

$a = new TPoint(4,5);
$b = new TPoint(10,15);
function Leng($A, $B){
    $length = pow(($B->getX() - $A->getX()),2) + pow(($B->getY() - $A->getY()),2);
    $len = sqrt($length);
    return $len;
}

echo Leng($a , $b);