
/**
 * Using the TPoint and TTriangle types and the Leng and Area functions (see Param64–Param66), write a real-valued
 * function Dist(P, A, B) that returns the distance D(P, AB) between a point P and a line AB:
 * D(P, AB) = 2·SPAB/|AB|,
 * where SPAB is the area of the triangle PAB (parameters P, A, B are input parameters of TPoint type). Using this
 * function, find the distance between a point P and each of lines AB, AC, BC provided that the coordinates of
 * points P, A, B, C are given.
 */


function TPoint(x,y){
    this.X=x;
    this.Y=y;

}
function TTriangle (ax , bx, cx , ay , by , cy){
    this.Ax = ax;
    this.Bx = bx;
    this.Cx = cx;
    this.Ay = ay;
    this.By = by;
    this.Cy = cy;
}
function Length(a,b){
    var length = Math.pow((a.X - b.X),2) + Math.pow((a.Y - b.Y),2);
    length = Math.sqrt(length);
    return length;
}


function Perim(T){
    var a = new TPoint(T.Ax, T.Ay);
    var b = new TPoint(T.Bx, T.By);
    var c = new TPoint(T.Cx, T.Cy);

    var l1 = Length(a, b);
    var l2 = Length(b, c);
    var l3 = Length(c, a);

    return l1+l2+l3;
}

function Area(T){


    var a = new TPoint(T.Ax, T.Ay);
    var b = new TPoint(T.Bx, T.By);
    var c = new TPoint(T.Cx, T.Cy);

    var l1 = Length(a, b);
    var l2 = Length(b, c);
    var l3 = Length(c, a);

    var p  = l1+l2+l3;
    //SABC = (p·(p − |AB|)·(p − |AC|)·(p − |BC|))1/2,

    return Math.sqrt(p*(p-l1) * (p-l2) * (p-l3));
}


function Dist(S  , A ){
    return ((2*S)/A);
}

var t1 = new TTriangle(2,6,7,1,2,1);
var s = Area(t1);

var a = new TPoint(t1.Ax, t1.Ay);
var b = new TPoint(t1.Bx, t1.By);
var length = Length(a,b);


console.log(Dist(s , length));

