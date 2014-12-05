/**
 * Using the TPoint and TTriangle types and the Area function (see Param64–Param66), write a real-valued
 * function AreaN(P, N) that returns the area of a convex polygon with N (> 2) vertices. The polygon vertices have
 * the TPoint type; an array P contains all vertices in order of walk. Using this function, find the areas of three
 * polygons provided that the amount of vertices and the coordinates of all vertices are given for each polygon.
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


var vertices = [
    new TPoint(1,3) ,
    new TPoint(2,5) ,
    new TPoint(4,5) ,
    new TPoint(5,3) ,
    new TPoint(4,1) ,
    new TPoint(2,1)
];
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




function areaN(p){
    var totalArea = 0 ;
    for(var i = 1 ; i<p.length -1 ; i++){
        var triangle = new TTriangle(p[0   ].X,p[0   ].Y,
            p[i  ].X,p[i  ].Y ,
            p[i+1].X,p[i+1].Y  );
         totalArea += Area(triangle);
    }

    return totalArea;
}
console.log(areaN(vertices));