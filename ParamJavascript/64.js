/**
 * Define a new type called TPoint that is a record with two real-valued fields: X (an x-coordinate),
 * Y (an y-coordinate). Also write a real-valued function Leng(A, B) that returns the length of a segment AB (A and B
 * are input parameters of TPoint type):
 * |AB| = ((A.X − B.X)2 + (A.Y − B.Y)2)1/2.
 * Using this function, output lengths of segments AB, AC, AD provided that the coordinates of points A, B, C, D are
 * given.
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


var a = new TPoint(4,5);
var b = new TPoint(10,15);

console.log(Length(a , b));