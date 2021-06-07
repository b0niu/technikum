function wyswietl()
{
	var losowe=[];
	napis="";
	x=0;
	var o = parseInt(document.getElementById('od').value);
	var d = parseInt(document.getElementById('do').value);
	var e = parseInt(document.getElementById('ile').value);

	for(i=0;i<e;i++)
		{
			x=Math.floor(Math.random()*(d-o)+o);
			losowe[i]=x;
		}
	
	napis+="Wylosowane liczby:<br />";
	for(x in losowe)
		{
			napis+=losowe[x]+"<br />";
		}
	document.getElementById("ddd").innerHTML=napis;
}