/*var losowe=[];
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
document.getElementById("ddd").innerHTML=napis;*/
function imiona()
{var imiona=['Iza', 'Piotr', 'Andrzej', 'Jaros³aw', 'Alicja'];
for (i=0; i<5;i++)
	{imiona.push(document.forms['dane'].elements[i].value);}
napis="";
x=0;
for(x in imiona)
{napis += imiona[x] + "<br />";}
document.getElementById("ddd").innerHTML =napis;
document.getElementById("p2").disabled =false;}
function dlugosc()
{for
(i=0;i<5;)}