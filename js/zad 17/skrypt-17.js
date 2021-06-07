var losowe=[];
napis="";
x=0;

for(i=0;i<10;i++)
	{
			x=Math.floor(Math.random()*101);
			losowe[i]=x;
	}
	
napis+="Wylosowane liczby:<br />";
for(x in losowe)
	{
			napis+=losowe[x]+"<br />";
	}
document.getElementById("ddd").innerHTML=napis;