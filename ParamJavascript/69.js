/**
 * Using the TPoint type and the Leng function (see Param64), write a real-valued function PerimN(P, N) that returns
 * the perimeter of a polygon with N (> 2) vertices. The polygon vertices have the TPoint type; an array P contains
 * all vertices in order of walk. Using this function, find the perimeters of three polygons provided that the amount
 * of vertices and the coordinates of all vertices are given for each polygon.
 */


function TPoint(x,y){
    this.X=x;
    this.Y=y;

}


function Length(a,b){
    var length = Math.pow((a.X - b.X),2) + Math.pow((a.Y - b.Y),2);
    length = Math.sqrt(length);
    return length;
}



var a = new TPoint(1,3);
var b = new TPoint(2,5);
var c = new TPoint(4,5);
var d = new TPoint(5,3);
var e = new TPoint(4,1);
var f = new TPoint(2,1);

var vertices = [a,b,c,d,e,f];
function perimN(p){
    var x =[];
    var sum =0 ;
    for(var i = 0 ;i < 5 ; i++){
        sum += Length(p[i] , p[i+1])
    }
    sum += Length(p[0 ] , p[5]);

    return sum ;
}

console.log(perimN(vertices ));