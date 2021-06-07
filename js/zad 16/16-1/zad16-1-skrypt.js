function wykonaj()
{
	var x;
	var mytable=[];
	napis="";
	mytable[0] = document.getElementById('l1').value;
	mytable[1] = document.getElementById('l2').value;
	mytable[2] = document.getElementById('l3').value;
	mytable[3] = document.getElementById('l4').value;
	mytable[4] = document.getElementById('l5').value;

	//deklaracja tablicy
	//var mycars = new Array();
	//lub:
	
	mytable.sort(function(a,b){return a-b}); //żeby dobrze się sortowało
	mytable.reverse(); //odwraca sortowanie
	for(x in mytable)
	{
		napis += mytable[x] + "<br />";
	}
	var ddd = document.getElementById("ddd");
	ddd.innerHTML=napis;
}