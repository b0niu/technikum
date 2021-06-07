napis="";
var x;
//deklaracja tablicy
//var mycars = new Array();
//LUB:
var mycars=[];
mycars[0] = "BMW";
mycars[1] = 750;
mycars[2] = 2010;

for (x in mycars)
{
	napis += mycars[x] + "<br />";
}
var ddd = document.getElementById("ddd");
ddd.innerHTML = napis;