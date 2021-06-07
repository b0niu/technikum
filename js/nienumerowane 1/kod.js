function oblicz() {
var a document.getElementById("parA").value;
var b document.getElementById("parB").value;
var c document.getElementById("parC").value;

var a = parseInt(A);
var b = parseInt(B);
var c = parseInt(C);

var m=0;
if ((a<m)||(b<m)||c<m)
{
	document.getElementById('zero').innerHTML = "Jedna z liczb jest mniejsza niż zero";
}
else {
if(a>m) m=a;
if(b>m) m=b;
if(c>m) m=c;

var Wynik = document.getElementById('Wynik');
Wynik.innerHTML = m;
	}
}