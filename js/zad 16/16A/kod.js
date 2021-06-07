function oblicz()
{
napis="";
var x;
//deklaracja tablicy
//var mycars = new Array();
//LUB:
var liczby=[];
/*
liczby[0] = document.getElementById('l1').value;
liczby[1] = document.getElementById('l2').value;
liczby[2] = document.getElementById('l3').value;
liczby[3] = document.getElementById('l4').value;
liczby[4] = document.getElementById('l5').value;
liczby.sort(function(a,b){return a-b});
liczby.reverse();
*/
for (i=0; i<5; i++){
	liczby[i] = document.forms['form1'].elements[i].value;
}
for (x in liczby)
{
	napis += liczby[x] + "<br />";
}
var ddd = document.getElementById("ddd");
ddd.innerHTML = napis;
}