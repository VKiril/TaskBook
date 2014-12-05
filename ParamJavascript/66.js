/**
 * Using the TPoint and TTriangle types and the Leng and Perim functions (see Param64 and Param65),
 * write a real-valued function Area(T) that returns the area of a triangle T (T is an input parameter of TTriangle
 * type):
 * SABC = (p·(p − |AB|)·(p − |AC|)·(p − |BC|))1/2,
 * where p is the half-perimeter. Using this function, find the areas of triangles ABC, ABD, ACD provided that the
 * coordinates of points A, B, C, D are given.
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

var t1 = new TTriangle(2,6,7,1,2,1);
console.log(Area(t1));