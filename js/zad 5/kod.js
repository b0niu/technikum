function pobierzNazwe(data)
{
	var dzien;
	switch(data.getDay()) {
		case 0 : dzien = "niedziela"; break;
		case 1 : dzien = "poniadziałek"; break;
		case 2 : dzien = "wtorek"; break;
		case 3 : dzien = "środa"; break;
		case 4 : dzien = "czwartek"; break;
		case 5 : dzien = "piątek"; break;
		case 6 : dzien = "sobota"; break;
		default : dzien = false;
	}
	return dzien;
}
var napis = "";
var data = new Date();
var nazwaDnia;
if((nazwaDnia = pobierzNazwe(data)) !== false) {
	napis += "Dziś jest " + nazwaDnia + ".";
}
else {
	napis += "Nazwa dnia nie mogła zostać pobrana.";
}
var xddd = document.getElementById("xddd");
xddd.innerHTML = napis;