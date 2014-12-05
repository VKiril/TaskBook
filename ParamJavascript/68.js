/**
 * Using the TPoint and TTriangle types and the Dist function (see Param64, Param65, Param67), write a procedure Alts
 * (T, h1, h2, h3) that evaluates the altitudes h1, h2, h3 drawn from the vertices T.A, T.B, T.C of a triangle T (T is
 * an input parameter of TTriangle type, h1, h2, h3 are output real-valued parameters). Using this procedure, evaluate
 * the altitudes of each of triangles ABC, ABD, ACD provided that the coordinates of points A, B, C, D are given.
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
var c = new TPoint(t1.Cx, t1.Cy);

var length1 = Length(a,b);
var length2 = Length(a,c);
var length3 = Length(b,c);


console.log(Dist(s , length1));
console.log(Dist(s , length2));
console.log(Dist(s , length3));
