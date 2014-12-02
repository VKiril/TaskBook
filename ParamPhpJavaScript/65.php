<?php
/**
 * Using the TPoint type and the Leng function (see Param64), define a new type called TTriangle that is
 * a record with three fields A, B, C (triangle vertices) of TPoint type, and write a real-valued function Perim(T)
 * that returns the perimeter of a triangle T (T is an input parameter of TTriangle type). Using this function,
 * find perimeters of triangles ABC, ABD, ACD provided that the coordinates of points A, B, C, D are given.
 */



namespace ParamPhpJavaScrit\TTriangle;


echo '<div style="display: none;">';
include 'helper.php';
require_once '64.php';
echo '</div >';

class TTriangle {
    private $Ax ;
    private $Bx ;
    private $Cx ;

    private $Ay ;
    private $By ;
    private $Cy ;

    function __construct($Ax, $Ay, $Bx, $By, $Cx, $Cy)
    {
        $this->Ax = $Ax;
        $this->Cy = $Cy;
        $this->Cx = $Cx;
        $this->By = $By;
        $this->Ay = $Ay;
        $this->Bx = $Bx;
    }

    /**
     * @param mixed $Ax
     */
    public function setAx($Ax)
    {
        $this->Ax = $Ax;
    }

    /**
     * @return mixed
     */
    public function getAx()
    {
        return $this->Ax;
    }

    /**
     * @param mixed $Cy
     */
    public function setCy($Cy)
    {
        $this->Cy = $Cy;
    }

    /**
     * @return mixed
     */
    public function getCy()
    {
        return $this->Cy;
    }

    /**
     * @param mixed $Cx
     */
    public function setCx($Cx)
    {
        $this->Cx = $Cx;
    }

    /**
     * @return mixed
     */
    public function getCx()
    {
        return $this->Cx;
    }

    /**
     * @param mixed $By
     */
    public function setBy($By)
    {
        $this->By = $By;
    }

    /**
     * @return mixed
     */
    public function getBy()
    {
        return $this->By;
    }

    /**
     * @param mixed $Bx
     */
    public function setBx($Bx)
    {
        $this->Bx = $Bx;
    }

    /**
     * @return mixed
     */
    public function getBx()
    {
        return $this->Bx;
    }

    /**
     * @param mixed $Ay
     */
    public function setAy($Ay)
    {
        $this->Ay = $Ay;
    }

    /**
     * @return mixed
     */
    public function getAy()
    {
        return $this->Ay;
    }


}

use TPoint\TPoint;
$t1 = new TTriangle(2,6,7,1,2,1);
function Leng1($a,$b){
    $length = pow(($a->getX() - $b->getX()),2) + pow($a->getY() - $b->getY(),2);
    $len = sqrt($length);
    return $len;
}

function Perim($T){
    $a = new TPoint($T->getAx(), $T->getAy());
    $b = new TPoint($T->getBx(), $T->getBy());
    $c = new TPoint($T->getCx(), $T->getCy());

    $l1 = Leng1($a, $b);
    $l2 = Leng1($b, $c);
    $l3 = Leng1($c, $a);

   return $l1+$l2+$l3;
}
echo Perim($t1);